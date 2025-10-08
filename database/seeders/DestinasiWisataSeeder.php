<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DestinasiWisata;

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinasiWisata::create([
            'title' => 'Destinasi Wisata',
            'background' => 'images/bg2.jpg',
        ]);

        $data = [
            [
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Rafting',
                'gambar' => 'images/destinasi/destinasi1.jpg',
                'cardContent' => "Rafting dapat dinikmati di Sungai Bahorok yang mengalir melalui kawasan Bukit Lawang. Aktivitas ini menawarkan pengalaman seru mengarungi arus sungai sambil menikmati pemandangan hutan tropis di tepiannya. Rafting di sini tidak hanya memberikan tantangan fisik, tetapi juga kesempatan melihat keindahan alam Sumatra Utara dari sudut pandang yang berbeda.\n\nFoto by : @franzire99"
            ],
            [
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Bat Cave Tour',
                'gambar' => 'images/destinasi/destinasi2.png',
                'cardContent' => "Bat Cave Tour membawa pengunjung menjelajahi gua alami yang terletak tidak jauh dari pusat Bukit Lawang. Gua ini dihuni oleh koloni kelelawar dan memiliki formasi stalaktit dan stalagmit yang menawan. Perjalanan menuju gua melewati jalur perkebunan dan hutan, sehingga memberikan kombinasi petualangan dan edukasi alam.\n\nFoto by: Bukit Lawang Tour & Trekking (Bat Cave Day Tour)"
            ],
            [
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Tubing',
                'gambar' => 'images/destinasi/destinasi3.jpg',
                'cardContent' => "Tubing adalah aktivitas santai menyusuri Sungai Bahorok dengan ban besar, di mana pengunjung dapat menikmati aliran sungai yang tenang di beberapa titik dan lebih deras di bagian lain. Perbedaan tubing dan rafting adalah Tubing menggunakan ban besar untuk satu orang, sementara rafting menggunakan perahu karet untuk beberapa orang. Tubing menjadi pilihan populer untuk menikmati suasana hutan dan perkebunan di sekitar Bukit Lawang dengan cara yang santai namun tetap menyenangkan.\n\nFoto by: shutterstock/Pramata"
            ],
            [
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Jungle Trekking di Taman Nasional Gunung Leuser',
                'gambar' => 'images/destinasi/destinasi4.jpg',
                'cardContent' => "Jungle Trekking di Taman Nasional Gunung Leuser merupakan pengalaman utama yang ditawarkan Bukit Lawang. Trekking ini membawa pengunjung masuk ke dalam hutan hujan tropis yang menjadi habitat orangutan Sumatra dan beragam flora-fauna langka. Dengan pemandu lokal yang berpengalaman, perjalanan ini menjadi kesempatan untuk mengenal lebih dekat kekayaan alam dan ekosistem Taman Nasional Gunung Leuser.\n\nFoto by: authentic-indonesia (bebe)"
            ],
        ];

        foreach ($data as $item) {
            DestinasiWisata::create($item);
        }
    }
}
