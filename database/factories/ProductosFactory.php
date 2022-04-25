<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph(2),
            'precio' => $this->faker->randomFloat(2,1,10000),
            'descuento' => $this->faker->randomFloat(2,1,9999),
            'estadoProducto' => $this->faker->randomElement(['Nuevo','Usado','Malogrado','Reparado']),
            'stock' => $this->faker->numberBetween(0,150),
            'foto' => $this->faker->imageUrl(),
            'idcategoria' => $this->faker->randomElement([1,2]),
        ];
    }
}
