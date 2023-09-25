<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $categories = [
            [
                "nombre" => "Telas de algodón",
                "descripcion" => "Telas de algodón de alta calidad para confección de prendas de vestir.",
            ],
            [
                "nombre" => "Seda y satén",
                "descripcion" => "Telas de seda y satén para prendas elegantes y de lujo.",
            ],
            [
                "nombre" => "Lana y tejidos abrigados",
                "descripcion" => "Telas de lana y otros tejidos abrigados para prendas de invierno.",
            ],
            [
                "nombre" => "Tela vaquera",
                "descripcion" => "Telas vaqueras duraderas y resistentes para confección de jeans y chaquetas.",
            ],
            [
                "nombre" => "Encajes y tejidos decorativos",
                "descripcion" => "Encajes y tejidos decorativos para prendas de moda y accesorios.",
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
         }
    }
}
