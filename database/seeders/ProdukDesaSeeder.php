<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukDesa;

class ProdukDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdukDesa::create([
            'title' => 'Produk Desa',
            'background' => 'images/bg2.jpg',
            'deskripsi' => 'Produk desa merupakan olahan masyarakat lokal yang mencerminkan pemanfaatan sumber daya alam serta keterampilan tradisional. Produk-produk ini menjadi bagian penting dari identitas desa dan berkontribusi pada perekonomian melalui kegiatan UMKM.',
        ]);

        // Produk-produk UMKM
        $produk = [
            ['cardTitle' => 'Kripik Singkong Produk UMKM', 'gambar' => 'images/produkdesa/p1.jpeg'],
            ['cardTitle' => 'Anyaman Bambu Produk UMKM', 'gambar' => 'images/produkdesa/p2.jpeg'],
            ['cardTitle' => 'Tas Anyam Produk UMKM', 'gambar' => 'images/produkdesa/p3.jpeg'],
            ['cardTitle' => 'Peyek Kacang Produk UMKM', 'gambar' => 'images/produkdesa/p4.jpeg'],
            ['cardTitle' => 'Pisang Saleh Produk UMKM', 'gambar' => 'images/produkdesa/p5.jpeg'],
            ['cardTitle' => 'Ecoprint Produk UMKM', 'gambar' => 'images/produkdesa/p6.jpeg'],
            ['cardTitle' => 'Handcraft Produk UMKM', 'gambar' => 'images/produkdesa/p7.jpeg'],
            ['cardTitle' => 'Cangkir Kayu Produk UMKM', 'gambar' => 'images/produkdesa/p8.jpg'],
        ];

        foreach ($produk as $item) {
            ProdukDesa::create($item);
        }
    }
}
