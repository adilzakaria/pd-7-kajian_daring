<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Study;

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
        return view('frontend.content', compact('study'));
    }
}
