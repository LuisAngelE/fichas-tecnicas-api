<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name'        => 'required|string|max:100',
                'middle_name'       => 'nullable|string|max:100',
                'last_name'         => 'required|string|max:100',
                'second_last_name'  => 'nullable|string|max:100',
                'email'             => 'required|string|email|max:255|unique:users',
                'phone'             => 'nullable|string|max:20',
                'employee_number'   => 'nullable|string|max:50',
                'password'          => 'required|string|min:6|confirmed',
                'user_type'         => 'nullable|integer|in:1,2',
            ], [
                'first_name.required' => 'El primer nombre es obligatorio.',
                'last_name.required' => 'El primer apellido es obligatorio.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'Debe ser un correo electrónico válido.',
                'email.unique' => 'Este correo electrónico ya está registrado.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
                'password.confirmed' => 'La confirmación de la contraseña no coincide.',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $data['user_type'] = $request->user_type ?? User::VIEWER;

            $user = User::create($data);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Usuario registrado exitosamente.',
                'user' => $user,
                'token' => $token
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al registrar usuario.',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ], [
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'El correo electrónico debe ser una dirección válida.',
                'password.required' => 'La contraseña es obligatoria.',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return response()->json(['error' => 'El usuario no existe.'], 404);
            }

            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['error' => 'Contraseña incorrecta.'], 401);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'user' => $user,
                'token' => $token
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error de inicio de sesión',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function me(Request $request)
    {
        try {
            $user = $request->user()->load('imageProfile');

            if (!$user->imageProfile) {
                $user->imageProfile = (object)[
                    'url' => asset('images/default.png')
                ];
            }

            return response()->json([
                'message' => 'Usuario autenticado',
                'user' => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener el usuario',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
