<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            ['nombre' => 'Producto A', 'descripcion' => 'Descripción del Producto A', 'precio' => 10.00, 'stock' => 100],
            ['nombre' => 'Producto B', 'descripcion' => 'Descripción del Producto B', 'precio' => 20.00, 'stock' => 50],
            ['nombre' => 'Producto C', 'descripcion' => 'Descripción del Producto C', 'precio' => 30.00, 'stock' => 75],
        ]);

        Producto::factory(50)->create(); // Crea 50 productos
    }
}
