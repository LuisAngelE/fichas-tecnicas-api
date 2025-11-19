<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubcategoryController extends Controller
{
    public function index()
    {
        try {
            $subcategories = Subcategory::with('category')->get();
            return response()->json($subcategories, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener las subcategorías',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $subcategory = Subcategory::with('category')->findOrFail($id);
            return response()->json($subcategory, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Subcategoría no encontrada',
                'mensaje' => $e->getMessage()
            ], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255|unique:subcategories,name',
            ], [
                'category_id.required' => 'La categoría es obligatoria',
                'category_id.exists' => 'La categoría seleccionada no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
            ]);

            $subcategory = Subcategory::create($validated);

            return response()->json([
                'mensaje' => 'Subcategoría creada correctamente',
                'subcategoría' => $subcategory
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al crear la subcategoría',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $subcategory = Subcategory::findOrFail($id);

            if ($subcategory->segments()->exists()) {
                return response()->json([
                    'error' => 'No se puede editar la subcategoría.',
                    'mensaje' => 'La subcategoría tiene segmentos asociados y no puede ser editada.'
                ], 409);
            }

            $validated = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255|unique:subcategories,name,' . $subcategory->id,
            ], [
                'category_id.required' => 'La categoría es obligatoria',
                'category_id.exists' => 'La categoría seleccionada no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
            ]);

            $subcategory->update($validated);

            return response()->json([
                'mensaje' => 'Subcategoría actualizada correctamente',
                'subcategoría' => $subcategory
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al actualizar la subcategoría',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $subcategory = Subcategory::findOrFail($id);

            if ($subcategory->segments()->exists()) {
                return response()->json([
                    'error' => 'No se puede eliminar la subcategoría.',
                    'mensaje' => 'La subcategoría tiene segmentos asociados y no puede ser eliminada.'
                ], 409); 
            }

            $subcategory->delete();

            return response()->json([
                'mensaje' => 'Subcategoría eliminada correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al eliminar la subcategoría',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }
}
