<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table = 'studys';
    protected $fillable = ['id', 'judul', 'deskripsi', 'file'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }
}
