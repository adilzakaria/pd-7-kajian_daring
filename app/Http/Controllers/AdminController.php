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
            'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:30000',
        ]);

        // Simpan data kajian ke database
        $study = new Study();
        $study->id_kategori = $request->category;
        $study->nama = $request->nama;
        $study->judul = $request->judul;
        $study->deskripsi = $request->deskripsi;

        // Simpan file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('study_files',$fileName, 'public');
            $study->file = $filePath;
        }
        $study->save();
        
        return redirect()->route('table')->with('success', 'Kajian berhasil ditambahkan');
    }

    public function table(Request $request){

        // Query dasar untuk mengambil data studys dengan relasi category
        $query = Study::with('category');

        // Menambahkan fitur pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('judul', 'like', "%{$search}%")
                ->orWhere('nama', 'like', "%{$search}%");
    }

        // Mengambil semua data studys
        $studies = Study::with('category')->paginate(5);

        // Mengambil semua kategori
        $categories = Category::all();

        // Mengirim data ke view
        return view('admin.table', compact('studies', 'categories'));
    }

    public function edit($id)
    {
        $study = Study::with('category')->findOrFail($id);
        return view('admin.edit', compact('study'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $study = Study::findOrFail($id);
        $study->judul = $request->input('judul');
        $study->deskripsi = $request->input('deskripsi');
        $study->save();

        return redirect()->route('table')->with('success', 'Kajian berhasil diperbarui!');
    }
}
