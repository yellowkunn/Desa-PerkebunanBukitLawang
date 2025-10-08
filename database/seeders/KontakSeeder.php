<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'title' => 'Kontak',
            'background' => 'images/bg2.jpg',
            'instagram' => 'https://www.instagram.com/dewibukitlawang/?igsh=dmxqOHM4N2cyM3Rz#',
            'lokasi' => 'Bukit Lawang, Kec. Bohorok, Kabupaten Langkat, Sumatera Utara',
            'maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22526.310125961594!2d98.13186647590722!3d3.558286209196696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030c81b5f04b997%3A0xd57e31753995db8f!2sBukit%20Lawang%2C%20Kec.%20Bohorok%2C%20Kabupaten%20Langkat%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1757758905241!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'whatsapp'     => '081804138610',
            'email'  => 'Pesonabukitlawang5@gmail.com',
        ]);
    }
}
