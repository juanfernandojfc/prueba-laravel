<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 5, 100),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}

