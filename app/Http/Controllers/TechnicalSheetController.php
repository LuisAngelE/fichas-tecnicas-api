<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Segment;
use App\Models\CarModel;
use App\Models\TechnicalSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class TechnicalSheetController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = TechnicalSheet::with(['model.segment.subcategory.category']);

            if ($request->filled('category_id')) {
                $query->whereHas('model.segment.subcategory.category', function ($q) use ($request) {
                    $q->where('id', $request->category_id);
                });
            }

            if ($request->filled('subcategory_id')) {
                $query->whereHas('model.segment.subcategory', function ($q) use ($request) {
                    $q->where('id', $request->subcategory_id);
                });
            }

            if ($request->filled('segment_id')) {
                $query->whereHas('model.segment', function ($q) use ($request) {
                    $q->where('id', $request->segment_id);
                });
            }

            if ($request->filled('model_id')) {
                $query->where('model_id', $request->model_id);
            }

            if ($request->filled('search')) {
                $search = $request->search;
                $query->where('file_name', 'LIKE', "%{$search}%")
                    ->orWhereHas('model', fn($q) => $q->where('name', 'LIKE', "%{$search}%"));
            }

            $sheets = $query->orderByDesc('created_at')->get();

            return response()->json([
                'success' => true,
                'data' => $sheets
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener las fichas técnicas',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'model_id' => 'required|exists:models,id',
                'file' => 'required|file|mimes:pdf|max:10240',
                'version' => 'nullable|string|max:50',
            ], [
                'model_id.required' => 'El modelo es obligatorio',
                'model_id.exists' => 'El modelo seleccionado no existe',
                'file.required' => 'El archivo es obligatorio',
                'file.mimes' => 'Solo se permiten archivos PDF',
                'file.max' => 'El tamaño máximo permitido es de 10 MB',
                'version.max' => 'La versión no puede tener más de 50 caracteres',
            ]);

            $path = $request->file('file')->store('fichas', 'public');

            $sheet = TechnicalSheet::create([
                'model_id' => $validated['model_id'],
                'file_name' => $request->file('file')->getClientOriginalName(),
                'file_path' => $path,
                'version' => $validated['version'] ?? 'v1.0',
                'uploaded_by' => auth()->id() ?? null,
            ]);

            return response()->json([
                'mensaje' => 'Ficha técnica subida correctamente',
                'ficha_técnica' => $sheet
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al subir la ficha técnica',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $sheet = TechnicalSheet::findOrFail($id);

            if (Storage::disk('public')->exists($sheet->file_path)) {
                Storage::disk('public')->delete($sheet->file_path);
            }

            $sheet->delete();

            return response()->json([
                'mensaje' => 'Ficha técnica eliminada correctamente.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al eliminar la ficha técnica',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function filters()
    {
        try {
            $categories = Category::with(['subcategories.segments.models'])->get();

            return response()->json([
                'success' => true,
                'data' => $categories
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener los filtros',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }
}
