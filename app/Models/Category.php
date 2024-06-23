<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categorys'; // Nama tabel di database
    protected $fillable = ['nama_kategori']; // Kolom yang bisa diisi
}
