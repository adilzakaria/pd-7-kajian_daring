<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Study;
use Illuminate\Support\Facades\Storage;

class StudyController extends Controller
{
    public function kajian(Request $request)
    {
        // Mengambil semua data studys
        // $studies = Study::with('category')->get();
        
        // Mengambil semua kategori
        $categories = Category::all();

        // Default sorting
        $orderBy = 'created_at';
        $orderDirection = 'desc';

        // Check if sorting is requested
        if ($request->has('order')) {
            $orderDirection = $request->order === 'asc' ? 'asc' : 'desc';
        }

        // Mengambil semua data studys dengan pengurutan
        $studies = Study::with('category')
                        ->orderBy($orderBy, $orderDirection)
                        ->paginate(6);
        
        // Mengirim data ke view
        return view('frontend.study', compact('studies', 'categories','orderDirection'));
    }

    public function showkajian($id){
        $study = Study::with('category')->findOrFail($id);
        // Mengambil related post berdasarkan kategori yang sama
        $relatedStudies = Study::where('id_kategori', $study->id_kategori)
                                ->where('id', '!=', $study->id)
                                ->limit(5) // Batasi jumlah related post yang ditampilkan
                                ->get();

        return view('frontend.content', compact('study', 'relatedStudies'));
    }

    public function download($id){
        $study = Study::FindOrFail($id);

        if (!$study->file){
            abort(404);
        }
        $filePath = 'public/' . $study->file;
        return Storage::download($filePath);
    }
}
