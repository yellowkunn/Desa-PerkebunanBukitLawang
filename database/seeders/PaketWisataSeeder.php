<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class PaketWisataSeeder extends Seeder
{
    public function run(): void
    {
        PaketWisata::create([
            'title' => 'Paket Wisata',
            'background' => 'images/bg2.jpg',
            'deskripsi' => 'Paket wisata di Bukit Lawang umumnya menawarkan pengalaman menyeluruh yang memadukan keindahan alam, petualangan, dan interaksi budaya. Wisatawan dapat menikmati trekking di hutan hujan tropis, mengamati satwa liar, menjelajahi sungai, serta mengenal kehidupan masyarakat setempat melalui kegiatan budaya dan kuliner. Paket ini dirancang untuk memberikan pengalaman yang autentik sekaligus mendukung pariwisata berkelanjutan di kawasan tersebut.',
        ]);

        $data = [
            [
                'gambar' => 'images/paketwisata/pw1.jpg',
                'cardTitle' => 'Rafting in Bukit Lawang',
                'harga' => 100000,
            ],
            [
                'gambar' => 'images/paketwisata/pw2.jpg',
                'cardTitle' => 'Seni Pahat Ukir Kayu Bekas',
                'harga' => 250000,
            ],
            [
                'gambar' => 'images/paketwisata/pw3.jpg',
                'cardTitle' => 'Karya Seni Lukis Bukit Lawang',
                'harga' => 400000,
            ],
            [
                'gambar' => 'images/paketwisata/pw4.jpg',
                'cardTitle' => 'Magnet Orangutan',
                'harga' => 25000,
            ],
                        [
                'gambar' => 'images/paketwisata/pw5.jpg',
                'cardTitle' => 'UMKM Rakyat Desa',
                'harga' => 75000,
            ],
            [
                'gambar' => 'images/paketwisata/pw6.jpg',
                'cardTitle' => 'Post Card Bukit Lawang',
                'harga' => 300000,
            ],
            [
                'gambar' => 'images/paketwisata/pw7.jpg',
                'cardTitle' => 'Arung Jeram Sungai Bahorok',
                'harga' => 5000,
            ],
            [
                'gambar' => 'images/paketwisata/pw8.jpg',
                'cardTitle' => 'Tour Village by Bike',
                'harga' => 150000,
            ],
        ];

        foreach ($data as $item) {
            PaketWisata::create($item);
        }
    }
}
