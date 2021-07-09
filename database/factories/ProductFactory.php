<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->sentence;
        $slug = str_replace(' ', '-', $title);

        $colorArray = Product::color();

        return [
            'category_id' => Category::factory(),
            'slug' => $slug,
            'title' => $title,
            'image' => $this->faker->image(public_path('storage'), 480, 480, null, false),
            'color' => $this->faker->randomElement($colorArray),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(30, 300),
            'stars' => $this->faker->numberBetween(1, 5),
        ];
    }
}
