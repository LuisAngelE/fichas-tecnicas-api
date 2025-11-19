<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ModelController extends Controller
{
    public function index()
    {
        try {
            $models = CarModel::with('segment')->get();
            return response()->json($models, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener los modelos',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $model = CarModel::with('segment')->findOrFail($id);
            return response()->json($model, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Modelo no encontrado',
                'mensaje' => $e->getMessage()
            ], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'segment_id' => 'required|exists:segments,id',
                'name' => 'required|string|max:255|unique:models,name',
                'description' => 'nullable|string|max:500',
            ], [
                'segment_id.required' => 'El segmento es obligatorio',
                'segment_id.exists' => 'El segmento seleccionado no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
                'description.max' => 'La descripción no puede tener más de 500 caracteres',
            ]);

            $model = CarModel::create($validated);

            return response()->json([
                'mensaje' => 'Modelo creado correctamente',
                'modelo' => $model
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al crear el modelo',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $model = CarModel::findOrFail($id);

            if ($model->technicalSheets()->exists()) {
                return response()->json([
                    'error' => 'No se puede editar el modelo.',
                    'mensaje' => 'El modelo tiene fichas técnicas asociadas y no puede ser editado.'
                ], 409);
            }

            $validated = $request->validate([
                'segment_id' => 'required|exists:segments,id',
                'name' => 'required|string|max:255|unique:models,name,' . $model->id,
                'description' => 'nullable|string|max:500',
            ], [
                'segment_id.required' => 'El segmento es obligatorio',
                'segment_id.exists' => 'El segmento seleccionado no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
                'description.max' => 'La descripción no puede tener más de 500 caracteres',
            ]);

            $model->update($validated);

            return response()->json([
                'mensaje' => 'Modelo actualizado correctamente',
                'modelo' => $model
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al actualizar el modelo',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $model = CarModel::findOrFail($id);

            if ($model->technicalSheets()->exists()) {
                return response()->json([
                    'error' => 'No se puede eliminar el modelo.',
                    'mensaje' => 'El modelo tiene fichas técnicas asociadas y no puede ser eliminado.'
                ], 409);
            }
            
            $model->delete();

            return response()->json([
                'mensaje' => 'Modelo eliminado correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al eliminar el modelo',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }
}
