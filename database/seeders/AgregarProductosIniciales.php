<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarProductosIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i=0; $i < 500; $i++) { 
            DB::table('productos')->insert([
                'nombre'=> $faker->name(),
                'codigo' => $faker->numberBetween(99999,999999999),
                'precio' => $faker->randomFloat(999999000,999999999999),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}