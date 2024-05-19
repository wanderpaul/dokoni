<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        $cities = [
            'Tokyo',
            'Osaka',
            'Nagoya',
            'Yokohama',
            'Fukuoka',
            'Sapporo',
            'Kawasaki',
            'Kobe',
            'Kyoto',
            'Saitama',
            'Hiroshima',
            'Sendai',
            'Setagaya',
            'Nerima',
            'Ota-ku',
            'Edogawa',
            'Adachi',
            'Itabashi',
            'Suginami-ku',
            'Koto-ku',
            'Katsushika-ku',
            'Shinagawa-ku',
            'Toyonaka',
            'Kita-ku',
            'Shinjuku',
            'Nakano',
            'Toshima',
            'Meguro',
            'Sumida',
            'Minato',
            'Bunkyo-ku',
            'Chofugaoka',
            'Shibuya-ku',
            'Arakawa',
            'Taito',
            'Nishitokyo',
            'Kamirenjaku',
            'Chuo-ku',
            'Musashino',
            'Moriguchi',
            'Kokubunji',
            'Koganei',
            'Hoyacho',
            'Shibuya',
            'Komae',
            'Tanashicho',
            'Warabi',
        ];

        foreach ($cities as $city) {
            $data[] = [
                'country_id' => 1,
                'city' => $city
            ];
        }

        DB::table('cities')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
