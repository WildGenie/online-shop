<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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

        $category = Category::factory()->create(['name' => 'chairs']);
        $category2 = Category::factory()->create(['name' => 'sofas']);
        $category3 = Category::factory()->create(['name' => 'chests of drawers']);
        $category4 = Category::factory()->create(['name' => 'tables']);
        $category5 = Category::factory()->create(['name' => 'beds']);
        $category6 = Category::factory()->create(['name' => 'accessories']);


         Product::factory(10)->create(['category_id' => $category->id]);
         Product::factory(3)->create(['category_id' => $category2->id]);
         Product::factory(5)->create(['category_id' => $category3->id]);
         Product::factory(9)->create(['category_id' => $category4->id]);
         Product::factory(7)->create(['category_id' => $category5->id]);
         Product::factory(3)->create(['category_id' => $category6->id]);

         Post::factory(9)->create();
    }
}
