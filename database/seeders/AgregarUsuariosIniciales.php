<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarUsuariosIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_Es');
        for ($i=0; $i < 200; $i++) { 
            DB::table('usuarios')->insert([
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'nombre'=> $faker->name(),
                'codigo' => $faker->numberBetween(99999,999999999),
                'lugar_tienda' =>$faker->city(),
                'fecha_venta' => $faker->dateTimeThisCentury(),
                'telefono' => $faker-> numberBetween(9999900000,99999999999),
    


            ]);
        }
    }
}
