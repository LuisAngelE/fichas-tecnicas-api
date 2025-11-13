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
                'second_last_name'  => 'required|string|max:100',
                'email'             => 'required|string|email|max:255|unique:users',
                'phone'             => 'required|string|max:20',
                'employee_number'   => 'required|string|max:50',
                'password'          => 'required|string',
                'user_type'         => 'nullable|integer|in:1,2',
            ], [
                'first_name.required' => 'El primer nombre es obligatorio.',
                'last_name.required' => 'El primer apellido es obligatorio.',
                'second_last_name.required' => 'El segundo apellido es obligatorio.',
                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'Debe ser un correo electrónico válido.',
                'email.unique' => 'Este correo electrónico ya está registrado.',
                'phone.required' => 'El teléfono es obligatoria.',
                'employee_number.required' => 'El número de colaborador es obligatorio.',
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

    public function login($employee_number)
    {
        try {
            $user = User::where('employee_number', $employee_number)->first();

            if (!$user) {
                return response()->json([
                    'error' => 'Empleado no encontrado.'
                ], 404);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Autenticación exitosa',
                'user' => $user,
                'token' => $token
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al autenticar empleado',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
