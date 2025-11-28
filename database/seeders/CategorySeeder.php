<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryModel::create([
            'name' => 'Đời thường',
        ]);
        CategoryModel::create([
            'name' => 'Lập trình',
        ]);
    }
}
