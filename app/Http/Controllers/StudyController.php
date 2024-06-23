<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Study;

class StudyController extends Controller
{
    public function show()
    {
        // Ambil semua kategori dari database
        $categories = Category::all();
        
        // Kirim data kategori ke view
        return view('frontend.study', compact('categories'));
    }
}
