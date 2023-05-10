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
                "title" => "Apartamentos Vista Club ",
                "description" => "Apartamentos Vista Club es un complejo ubicado en la localidad de Santa Ponsa. Ubicado a pocos metros del centro y está formado de apartamentos modernos, espaciosos, mucha luz natural y una amplia terraza con vistas. Es el alojamiento ideal para unas vacaciones tranquilas en Mallorca, en un enclave maravilloso en contacto con la naturaleza. Oferta en base doble por 3 días y 2 noches: 100 euros.",
            ],
            [
                "title" => "Aparthotel Playas Ca’s Saboners",
                "description" => "El aparthotel Playas Ca’s Saboners es un alojamiento independiente situado a 200 metros de la playa de Palmanova, en Mallorca. Ofrece apartamentos espaciosos y totalmente equipados, ideales para unas vacaciones familiares. El establecimiento cuenta además con un supermercado bien surtido, parque infantil y una gran piscina de tipo laguna rodeada de olivos, palmeras y jardines. Oferta para grupo familiar, con 30% de descuento por una semana: 1200 euros.",
            ],
            [
                "title" => "Hotel Astoria Playa",
                "description" => "Hotel Astoria Playa es un establecimiento solo para adultos situado muy cerca de la playa de Alcudia (Mallorca). Rodeado por unos jardines, ofrece 127 habitaciones y 47 suites, piscinas y jacuzzis al aire libre y un restaurante con servicio buffet y show cooking. Oferta exclusiva para dos personas por una semana: 900 euros.",
            ],
        ]);
    }
}
