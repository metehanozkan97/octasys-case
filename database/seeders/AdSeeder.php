<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // 10 adet sahte reklam verisi ekleyelim
        $positions = ['header', 'footer', 'sidebar']; // Pozisyonlar

        for ($i = 0; $i < 10; $i++) {
            Ad::create([
                'ad_position' => $positions[array_rand($positions)], // Rastgele bir pozisyon seçiyoruz
                'ad_code' => '<script>console.log("AdSense Kodu ' . $i . '")</script>', // Örnek reklam kodu
                'is_active' => rand(0, 1), // Reklam aktif mi pasif mi rastgele belirliyoruz
            ]);
        }
    }
}
