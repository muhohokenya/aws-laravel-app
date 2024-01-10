<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentCategory = Category::query()->create(['name' => 'Electronics']);
        Category::query()->create(['name' => 'Smartphones', 'parent_id' => $parentCategory->id]);
        Category::query()->create(['name' => 'Laptops', 'parent_id' => $parentCategory->id]);
        // Add more categories as needed
    }
}
