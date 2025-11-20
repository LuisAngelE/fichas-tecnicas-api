<?php

namespace App\Http\Controllers;

use App\Models\TechnicalSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class TechnicalSheetController extends Controller
{
    private function getByStatus(Request $request, $status)
    {
        try {
            $query = TechnicalSheet::with(['model.segment.subcategory.category', 'user', 'image'])->where('status', $status);

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

            $sheets->each(function ($sheet) {
                if (!$sheet->image) {
                    $sheet->image = (object)[
                        'url' => asset('storage/fichas/imagenes/default.webp')
                    ];
                }
            });

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

    public function inDevelopment(Request $request)
    {
        return $this->getByStatus($request, TechnicalSheet::Development);
    }

    public function completed(Request $request)
    {
        return $this->getByStatus($request, TechnicalSheet::Completed);
    }

    public function show($id)
    {
        try {
            $sheet = TechnicalSheet::with(['model.segment.subcategory.category'])->findOrFail($id);
            return response()->json($sheet, 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Ficha técnica no encontrada',
                'mensaje' => $e->getMessage()
            ], 404);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'model_id' => 'required|exists:models,id',
                'file' => 'required|file|mimes:pdf|max:10240',
                'version' => 'nullable|string|max:50',
                'status' => 'required',
                'status' => 'required|in:' . TechnicalSheet::Development . ',' . TechnicalSheet::Completed,
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'model_id.required' => 'El modelo es obligatorio',
                'model_id.exists' => 'El modelo seleccionado no existe',
                'file.required' => 'El archivo es obligatorio',
                'file.mimes' => 'Solo se permiten archivos PDF',
                'file.max' => 'El tamaño máximo permitido es de 50 MB',
                'version.max' => 'La versión no puede tener más de 50 caracteres',
                'status.required' => 'El estatus es obligatorio.',
                'status.in' => 'El estatus debe ser 1 (En desarrollo) o 2 (Completada).',
                'image.image' => 'El archivo debe ser una imagen.',
                'image.mimes' => 'La imagen debe ser jpeg, png, jpg o gif.',
                'image.max' => 'La imagen no debe pesar más de 2MB.',
            ]);

            $path = $request->file('file')->store('fichas', 'public');

            $sheet = TechnicalSheet::create([
                'model_id' => $validated['model_id'],
                'status' => $validated['status'],
                'file_name' => $request->file('file')->getClientOriginalName(),
                'file_path' => $path,
                'version' => $validated['version'] ?? 'v1.0',
                'uploaded_by' => auth()->id() ?? null,
            ]);

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $imagePath = $file->storeAs('fichas/imagenes', $filename, 'public');
                $url = asset('storage/' . $imagePath);

                if ($sheet->image) {
                    $oldPath = str_replace(asset('storage') . '/', '', $sheet->image->url);

                    if (Storage::disk('public')->exists($oldPath)) {
                        Storage::disk('public')->delete($oldPath);
                    }

                    $sheet->image->update(['url' => $url]);
                } else {
                    $sheet->image()->create(['url' => $url]);
                }
            }

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

    public function update(Request $request, $id)
    {
        try {
            $sheet = TechnicalSheet::findOrFail($id);

            $validated = $request->validate([
                'model_id' => 'required|exists:models,id',
                'version' => 'nullable|string|max:50',
                'status' => 'required|in:' . TechnicalSheet::Development . ',' . TechnicalSheet::Completed,
                'file' => 'nullable|file|mimes:pdf|max:10240',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'model_id.required' => 'El modelo es obligatorio',
                'model_id.exists' => 'El modelo seleccionado no existe',
                'file.mimes' => 'Solo se permiten archivos PDF',
                'file.max' => 'El tamaño máximo permitido es de 50 MB',
                'version.max' => 'La versión no puede tener más de 50 caracteres',
                'status.required' => 'El estatus es obligatorio.',
                'status.in' => 'El estatus debe ser 1 (En desarrollo) o 2 (Completada).',
                'image.image' => 'El archivo debe ser una imagen.',
                'image.mimes' => 'La imagen debe ser jpeg, png, jpg o gif.',
                'image.max' => 'La imagen no debe pesar más de 2MB.',
            ]);


            if ($request->hasFile('file')) {

                if (\Storage::disk('public')->exists($sheet->file_path)) {
                    \Storage::disk('public')->delete($sheet->file_path);
                }

                $path = $request->file('file')->store('fichas', 'public');

                $sheet->file_name = $request->file('file')->getClientOriginalName();
                $sheet->file_path = $path;
            }

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $imagePath = $file->storeAs('fichas/imagenes', $filename, 'public');
                $url = asset('storage/' . $imagePath);

                if ($sheet->image) {
                    $oldPath = str_replace(asset('storage') . '/', '', $sheet->image->url);

                    if (Storage::disk('public')->exists($oldPath)) {
                        Storage::disk('public')->delete($oldPath);
                    }

                    $sheet->image->update(['url' => $url]);
                } else {
                    $sheet->image()->create(['url' => $url]);
                }
            }

            $sheet->model_id = $validated['model_id'];
            $sheet->status = $validated['status'];
            $sheet->version = $validated['version'] ?? $sheet->version;
            $sheet->save();

            return response()->json([
                'mensaje' => 'Ficha técnica actualizada correctamente',
                'ficha_técnica' => $sheet
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al actualizar la ficha técnica',
                'mensaje' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $sheet = TechnicalSheet::findOrFail($id);

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
}
