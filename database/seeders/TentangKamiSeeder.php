<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        AboutUs::create([
            'title' => 'Tentang Perkebunan Bukit Lawang',
            'background' => 'images/bg2.jpg',
            'content' => "Bukit Lawang adalah nama tempat wisata di Kecamatan Bohorok, Kabupaten Langkat, Provinsi Sumatera Utara yang terletak 68 km sebelah barat laut Kota Binjai dan sekitar 80 km di sebelah barat laut kota Medan. Bukit Lawang termasuk dalam lingkup Taman Nasional Gunung Leuser yang merupakan daerah konservasi terhadap mawas orang utan. Pusat rehabilitasi orangutan Bukit Lawang didirikan pada tahun 1973. Tujuan utamanya adalah untuk melestarikan populasi orangutan yang semakin berkurang akibat perburuan, perdagangan dan deforestasi.

Destinasi wildlife tourism umumnya berupa taman nasional. Sejatinya Indonesia memiliki modal besar untuk mengembangkan wildlife tourism. Pasalnya, negeri ini memiliki 54 taman nasional. Salah satu yang terpopuler ialah Taman Nasional Gunung Leuser (TNGL), taman nasional seluas 1.094.692 hektare, dengan batas kawasan sepanjang 850 kilometer. Sekitar 80 persen wilayah TNGL berada di Provinsi Nanggroe Aceh Darussalam dan sisanya di Provinsi Sumatera Utara.

Kawasan TNGL jadi satu-satunya taman nasional di Indonesia yang dihuni empat satwa liar endemik, yang sangat terancam punah, yakni orangutan atau mawas sumatera (Pongo abelii), gajah sumatera (Elephas maximus sumatrensis), badak sumatera (Dicerorhinus sumatrensis), dan harimau sumatra (Panthera tigris sumatrae).

Lembaga konservasi dunia IUCN (International Union for Conservation of Nature) memasukkan keempat satwa ke dalam daftar merah atau IUCN Red List dengan kategori critically endangered alias sangat terancam punah. Keempatnya juga masuk daftar Apendiks I Konvensi Perdagangan Internasional untuk Tumbuhan dan Satwa Liar (Convention on International Trade in Endangered Species/CITES).

Pintu masuk utama kawasan TNGL yang paling populer dan hampir selalu ramai dikunjungi wisatawan ialah Desa Bukit Lawang, salah satu desa utama penyangga TNGL yang berada di Kecamatan Bahorok, Kabupaten Langkat, Sumatera Utara. Bukit Lawang berada 68 kilometer sebelah barat laut Kota Binjai, kota terbesar dan terpadat kedua di Sumatera Utara setelah Kota Medan. Antara Bukit Lawang dan pusat Kota Medan (Kantor Pos Besar) terpisah jarak sekitar 90 kilometer. Bukit Lawang terkenal sejak awal dekade 1970 berkat keberadaan pusat rehabilitasi orangutan jinak seluas 200 hektare dan panorama belantara hujan tropis. Orangutan yang direhabilitasi merupakan hasil sitaan dari masyarakat untuk dilepasliarkan kembali ke alam. Orangutan yang dilepasliarkan itu, tergolong semi-liar. Pusat rehabilitasi orangutan ini tidak lagi beroperasi sejak 2017.",
            'visi' => 'Visi',
            'visiContent' => 'Menuju Langkat Maju, Sehat, Sejahtera, Religius, dan Berkelanjutan.',
            'misi' => 'Misi',
            'misiContent' => json_encode([
                'Menuntaskan kemiskinan masyarakat termajinal dan nelayan pesisir.',
                'Meningkatkan pembangunan infrastruktur dan kawasan layak huni yang berkualitas dan merata diseluruh wilayah Kabupaten Langkat.',
                'Kehidupan sehat dan sejahtera dengan meningkatkan pembangunan sarana dan prasarana kesehatan dalam pengentasan stunting, serta peningkatan Integrasi Layanan Primer (ILP) dan penurunan angka kematian ibu dan bayi baru lahir.',
                'Pendidikan berkualitas untuk SDM yang religius melalui pembinaan keimanan dan ketakwaan serta pelestarian budaya di masyarakat.',
                'Meningkatkan pertumbuhan ekonomi melalui sektor unggulan untuk menciptakan lapangan kerja dan meningkatkan pendapatan asli daerah.',
                'Menyelenggarakan sistem tata kelola pemerintahan yang baik dan pemerintah yang bersih (clean government) dengan mudah, cepat, tuntas dengan penerapan Sistem Pemerintahan Berbasis Elektronik (SPBE) serta memelihara hubungan yang harmonis antara eksekutif, legislatif dan yudikatif.',
                'Mengelola dan memberdayakan Sumber Daya Alam (SDA) berbasiskan pelestarian lingkungan hidup dan agroindustri yang berkelanjutan.'
            ]),
            'gambar' => 'images/tentangkami.jpeg'
        ]);
    }
}
