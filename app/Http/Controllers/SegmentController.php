<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SegmentController extends Controller
{
    public function index()
    {
        try {
            $segments = Segment::with('subcategory')->get();
            return response()->json($segments, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener los segmentos',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $segment = Segment::with('subcategory')->findOrFail($id);
            return response()->json($segment, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Segmento no encontrado',
                'mensaje' => $e->getMessage()
            ], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'subcategory_id' => 'required|exists:subcategories,id',
                'name' => 'required|string|max:255|unique:segments,name',
            ], [
                'subcategory_id.required' => 'La subcategoría es obligatoria',
                'subcategory_id.exists' => 'La subcategoría seleccionada no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
            ]);

            $segment = Segment::create($validated);

            return response()->json([
                'mensaje' => 'Segmento creado correctamente',
                'segmento' => $segment
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al crear el segmento',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $segment = Segment::findOrFail($id);

            $validated = $request->validate([
                'subcategory_id' => 'required|exists:subcategories,id',
                'name' => 'required|string|max:255|unique:segments,name,' . $segment->id,
            ], [
                'subcategory_id.required' => 'La subcategoría es obligatoria',
                'subcategory_id.exists' => 'La subcategoría seleccionada no existe',
                'name.required' => 'El nombre es obligatorio',
                'name.max' => 'El nombre no puede tener más de 255 caracteres',
                'name.unique' => 'El nombre ya existe',
            ]);

            $segment->update($validated);

            return response()->json([
                'mensaje' => 'Segmento actualizado correctamente',
                'segmento' => $segment
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al actualizar el segmento',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $segment = Segment::findOrFail($id);

            $segment->delete();

            return response()->json([
                'mensaje' => 'Segmento eliminado correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al eliminar el segmento',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }
}
