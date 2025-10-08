<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        Dashboard::create([
            'section' => 'hero',
            'title1' => 'DESA WISATA',
            'title2' => 'PERKEBUNAN BUKIT LAWANG',
            'background' => 'images/bg1.jpg',
        ]);

        // Tentang Desa Wisata
        Dashboard::create([
            'section' => 'tentang',
            'title1' => 'Desa Wisata',
            'title2' => 'Perkebunan Bukit Lawang',
            'konten' => 'Desa Wisata Perkebunan Bukit Lawang, Kecamatan Bahorok, Kabupaten Langkat, masuk dalam 75 besar Desa Wisata Terbaik Anugerah Desa Wisata Indonesia (ADWI) 2023 dan meraih tiga terbaik desa wisata di Provinsi Sumatera Utara. Desa ini memiliki daya tarik unik seperti keberadaan orang utan Sumatera yang dilindungi, alam dan air yang sejuk, serta kekayaan kuliner dan ekonomi kreatif khas daerah.',
            'background' => 'images/orangutan.jpg',
        ]);

        // Destinasi Wisata Section
        Dashboard::create([
            'section' => 'destinasi',
            'title1' => 'Destinasi Wisata Perkebunan Bukit Lawang',
            'konten' => 'Objek Wisata Desa Perkebunan Bukit Lawang adalah Rafting, Jungle Tracking, Bat Cave Tour, dan Tubing',
        ]);

        // Paket Wisata Section
        Dashboard::create([
            'section' => 'paket',
            'title1' => 'Paket Wisata Pilihan',
        ]);
    }
}
