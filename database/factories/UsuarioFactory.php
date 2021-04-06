<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'nombre'=> $this->faker->name(),
            'codigo' => $this->faker->numberBetween(99999,999999999),
            'lugar_tienda' =>$this->faker->city(),
            'fecha_venta' => $this->faker->dateTimeThisCentury(),
            'telefono' => $this->faker-> numberBetween(9999900000,99999999999),

        ];
    }
}
