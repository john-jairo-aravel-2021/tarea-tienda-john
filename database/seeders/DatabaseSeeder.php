<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AgregarUsuariosIniciales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call (AgregarUsuariosIniciales::class);
        $this-> call (AgregarProductosIniciales::class);
        $this-> call (AgregarImagenesIniciales::class);
        $this-> call (AgregarImanenesAdicional::class);
        $this-> call (AgregarUsuarioAdicional::class);
        $this-> call (AgregarProductoAdicional::class);

    }
}
