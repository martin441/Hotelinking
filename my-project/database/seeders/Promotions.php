<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Promotions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert([
            [
                "title" => "Hotel Radison",
                "description" => "Oferta all inclusive para una persona por dos noches",
            ],
            [
                "title" => "Hotel Melia 3 estrellas",
                "description" => "Oferta para grupo familiar, con 30% de descuento por una semana.",
            ],
            [
                "title" => "Hotel Sol 5 estrellas",
                "description" => "Oferta exclusiva para dos personas por una semana en nuestro mejor Hotel.",
            ],
        ]);
    }
}
