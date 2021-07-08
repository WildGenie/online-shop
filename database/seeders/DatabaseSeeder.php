<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $category = Category::factory()->create();
        $category2 = Category::factory()->create();
        $category3 = Category::factory()->create();


         Product::factory(10)->create(['category_id' => $category->id]);
         Product::factory(24)->create(['category_id' => $category2->id]);
         Product::factory(5)->create(['category_id' => $category3->id]);
    }
}
