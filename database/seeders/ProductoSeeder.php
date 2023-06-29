<?php

namespace Database\Seeders;

use App\Models\ProductoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductoModel::factory()->count(75)->create();
    }
}
