<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['nama_kategori' => 'Kajian Khusus Anak Muda'],
            ['nama_kategori' => 'Kajian Tafsir Al Quran'],
            ['nama_kategori' => 'Kajian Hadis'],
            ['nama_kategori' => 'Kajian Fiqih'],
            ['nama_kategori' => 'Kajian Akidah'],
            ['nama_kategori' => 'Kajian Tasawuf'],
            ['nama_kategori' => 'Kajian Sejarah Islam'],
            ['nama_kategori' => 'Kajian Politik Islam'],
            ['nama_kategori' => 'Kajian Budaya Islam'],
            ['nama_kategori' => 'Kajian Lingkungan']
        ];

        DB::table('categorys')->insert($categories);
    }
}
