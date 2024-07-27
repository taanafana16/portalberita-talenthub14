<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Ekonomi',
            'deskripsi' => 'Berita tentang pasar keuangan, perusahaan, investasi, dan isu ekonomi global serta lokal.',
        ]);

        Kategori::create([
            'nama' => 'Kesehatan',
            'deskripsi' => 'Berita mengenai kesehatan, medis, kesehatan mental, dan perkembangan di bidang kesehatan.',
        ]);

        Kategori::create([
            'nama' => 'Pendidikan',
            'deskripsi' => 'Berita tentang sistem pendidikan, kebijakan pendidikan, dan berita terkait sekolah dan universitas.',
        ]);

        Kategori::create([
            'nama' => 'Olahraga',
            'deskripsi' => 'Berita tentang berbagai jenis olahraga, pertandingan, hasil, dan berita atlet.',
        ]);

        Kategori::create([
            'nama' => 'Hiburan',
            'deskripsi' => 'Berita tentang film, musik, acara TV, selebriti, dan kegiatan hiburan lainnya.',
        ]);
    }
}
