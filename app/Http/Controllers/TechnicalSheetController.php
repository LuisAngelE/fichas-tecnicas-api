<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Segment;
use App\Models\CarModel;
use App\Models\TechnicalSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnicalSheetController extends Controller
{
    public function index(Request $request)
    {
        $query = TechnicalSheet::query()
            ->with([
                'model.segment.subcategory.category'
            ]);

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

        $sheets = $query->orderByDesc('created_at')->paginate(15);

        return response()->json([
            'success' => true,
            'data' => $sheets
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model_id' => 'required|exists:models,id',
            'file' => 'required|file|mimes:pdf|max:10240',
            'version' => 'nullable|string|max:50',
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
            'success' => true,
            'message' => 'Ficha técnica subida correctamente',
            'data' => $sheet,
        ]);
    }

    public function destroy($id)
    {
        $sheet = TechnicalSheet::findOrFail($id);

        if (Storage::disk('public')->exists($sheet->file_path)) {
            Storage::disk('public')->delete($sheet->file_path);
        }

        $sheet->delete();

        return response()->json([
            'success' => true,
            'message' => 'Ficha técnica eliminada correctamente',
        ]);
    }

    public function filters()
    {
        $categories = Category::with([
            'subcategories.segments.models'
        ])->get();

        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }
}
