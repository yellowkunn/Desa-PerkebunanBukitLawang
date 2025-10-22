<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata2;
use App\Models\Itinerary;

class PaketWisata2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ============================
        // PAKET WISATA 3D2N
        // ============================
        $paket3d2n = PaketWisata2::create(['label' => '3D2N']);

        $itineraries3d2n = [
            ['Hari 1', '07.00 – 08.00', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat tentang perjalanan'],
            ['Hari 1', '08.00 – 09.30', 'Perjalanan dilanjutkan menuju Tanjung Pura'],
            ['Hari 1', '09.30 – 10.30', 'Tanjung Pura – wisata kuliner khas Tanjung Pura dan kunjungan ke Masjid Azizi, salah satu masjid terbesar di Langkat'],
            ['Hari 1', '10.30 – 11.30', 'Perjalanan dilanjutkan menuju Ecowisata Tangkahan'],
            ['Hari 1', '11.30 – 16.00', 'Ecowisata Tangkahan – interaksi langsung dengan gajah, memandikan gajah, river tubing (opsional), dan makan siang'],
            ['Hari 1', '16.00 – 16.30', 'Perjalanan menuju hotel'],
            ['Hari 1', '16.30 – malam', 'Hotel check-in, makan malam, free program'],

            ['Hari 2', '08.00 – 09.00', 'Sarapan pagi di hotel, check-out, briefing singkat'],
            ['Hari 2', '09.00 – 10.30', 'Perjalanan menuju Bukit Lawang'],
            ['Hari 2', '10.30 – 16.00', 'Bukit Lawang – trekking mencari satwa dilindungi (orangutan), eduwisata desa perkebunan, makan siang, dan berbelanja souvenir masyarakat lokal'],
            ['Hari 2', '16.00 – 16.30', 'Perjalanan menuju hotel'],
            ['Hari 2', '16.30 – malam', 'Hotel check-in, makan malam, free program'],

            ['Hari 3', '08.00 – 09.00', 'Sarapan pagi di hotel, check-out, briefing'],
            ['Hari 3', '09.00 – 11.00', 'Perjalanan menuju Sei Bingai'],
            ['Hari 3', '11.00 – 16.00', 'Sei Bingai – bermain air/body rafting, menikmati keindahan alam tersembunyi, dan makan siang'],
            ['Hari 3', '16.00 – 17.30', 'Perjalanan menuju Medan'],
            ['Hari 3', '17.30', 'Perjalanan selesai'],
        ];

        foreach ($itineraries3d2n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket3d2n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 4D3N
        // ============================
        $paket4d3n = PaketWisata2::create(['label' => '4D3N']);

        $itineraries4d3n = [
            ['Hari 1', '07.00 – 08.00', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat tentang perjalanan'],
            ['Hari 1', '08.00 – 09.30', 'Perjalanan dilanjutkan menuju Tanjung Pura'],
            ['Hari 1', '09.30 – 10.30', 'Tanjung Pura – nikmati suasana pasar tradisional, cicipi lemang tapai hangat, kue kacang, dan temukan kain batik khas sebagai oleh-oleh'],
            ['Hari 1', '10.30 – 11.30', 'Kunjungan ke Masjid Azizi, salah satu masjid terbesar di Langkat'],
            ['Hari 1', '11.30 – 12.30', 'Kunjungan ke Museum Langkat – mengenal sejarah dan budaya daerah'],
            ['Hari 1', '12.30 – 14.00', 'Makan siang di restoran lokal'],
            ['Hari 1', '14.00 – 15.00', 'Kunjungan ke Makam Pahlawan Nasional Amir Hamzah, disertai storytelling tentang sejarah Kesultanan Langkat'],
            ['Hari 1', '15.00 – 15.30', 'Perjalanan menuju hotel di area Tanjung Pura'],
            ['Hari 1', '15.30 – malam', 'Hotel check-in, makan malam, free program'],

            ['Hari 2', '08.00 – 09.00', 'Sarapan pagi di hotel, check-out, briefing singkat'],
            ['Hari 2', '09.00 – 10.30', 'Perjalanan menuju Ecowisata Tangkahan'],
            ['Hari 2', '10.30 – 16.00', 'Sesi edukasi di CRU, memandikan gajah, river tubing, dan jelajah air terjun (opsional)'],
            ['Hari 2', '16.00 – 16.30', 'Perjalanan menuju hotel'],
            ['Hari 2', '16.30 – malam', 'Hotel check-in, makan malam, free program'],

            ['Hari 3', '08.00 – 09.00', 'Sarapan pagi di hotel, check-out, briefing singkat'],
            ['Hari 3', '09.00 – 11.00', 'Perjalanan menuju Bukit Lawang'],
            ['Hari 3', '11.00 – 16.00', 'Bukit Lawang – trekking mencari orangutan, eduwisata desa perkebunan, makan siang, dan berbelanja produk masyarakat'],
            ['Hari 3', '16.00 – 16.30', 'Perjalanan menuju hotel'],
            ['Hari 3', '16.30 – malam', 'Hotel check-in, makan malam, free program'],

            ['Hari 4', '08.00 – 09.00', 'Sarapan pagi di hotel, check-out, briefing singkat'],
            ['Hari 4', '09.00 – 11.00', 'Perjalanan menuju Sei Bingai'],
            ['Hari 4', '11.00 – 16.00', 'Sei Bingai – bermain air/body rafting, menikmati keindahan alam tersembunyi, dan makan siang'],
            ['Hari 4', '16.00 – 17.30', 'Perjalanan kembali menuju Medan'],
            ['Hari 4', '17.30', 'Perjalanan selesai'],
        ];

        foreach ($itineraries4d3n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket4d3n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 1D
        // ============================
        $paket1d = PaketWisata2::create(['label' => '1D']);

        $itineraries1d = [
            ['Hari 1', '06.00 – 06.30', 'Berkumpul di Lapangan Merdeka Medan, registrasi peserta, briefing singkat tentang perjalanan'],
            ['Hari 1', '06.30 – 08.30', 'Perjalanan menuju Tanjung Pura – nikmati pemandangan persawahan dan perkampungan khas Sumatera Utara'],
            ['Hari 1', '08.30 – 09.30', 'Wisata Kuliner & Pasar Tradisional Tanjung Pura – cicipi lemang tapai hangat, kue kacang, dan camilan tradisional Melayu'],
            ['Hari 1', '09.30 – 11.30', 'Perjalanan menuju Tangkahan melalui kawasan perkebunan sawit dan hutan tropis'],
            ['Hari 1', '11.30 – 13.00', 'Tangkahan Ecotourism – menjelajah hutan tropis, menikmati jembatan gantung di atas Sungai Batang Serangan, bermain air, dan (opsional) berinteraksi dengan gajah'],
            ['Hari 1', '13.00 – 14.00', 'Makan siang di restoran lokal Tangkahan dengan menu khas pedesaan'],
            ['Hari 1', '14.00 – 15.00', 'Perjalanan menuju Bukit Lawang'],
            ['Hari 1', '15.00 – 16.30', 'Desa Perkebunan Bukit Lawang – trekking ringan di tepi Taman Nasional Gunung Leuser, menyusuri sungai, dan berfoto di spot ikonik'],
            ['Hari 1', '16.30 – 17.30', 'Perjalanan menuju Sei Bingai'],
            ['Hari 1', '17.30 – 18.30', 'Sei Bingai – bersantai di pinggir sungai dengan perbukitan hijau, menikmati senja sambil mencicipi jajanan lokal'],
            ['Hari 1', '18.30 – 21.00', 'Perjalanan kembali menuju Medan'],
            ['Hari 1', '21.00', 'Perjalanan selesai'],
        ];

        foreach ($itineraries1d as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket1d->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }
    }
}
