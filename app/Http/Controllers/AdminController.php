<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Study;

class AdminController extends Controller
{
    public function create()
    {
        // Ambil semua kategori dari database
        $categories = Category::all();
        
        // Kirim data kategori ke view
        return view('admin.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|exists:categorys,id',
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx,txt|max:3048',
        ]);
        $filePath = $request->file('file')->store('study_files');

        // Study::create([
        //     'id' => $validatedData['category'],
        //     'judul' => $validatedData['judul'],
        //     'deskripsi' => $validatedData['deskripsi'],
        //     'file' => $filePath,
        // ]);

        // Simpan data kajian ke database
        $study = new Study();
        $study->id_kategori = $request->category;
        $study->nama = $request->nama;
        $study->judul = $request->judul;
        $study->deskripsi = $request->deskripsi;

        // Simpan file
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('study_files', 'public');
            $study->file = $filePath;
        }
        $study->save();
        
        return redirect()->route('store')->with('success', 'Kajian berhasil ditambahkan');
    }
}
