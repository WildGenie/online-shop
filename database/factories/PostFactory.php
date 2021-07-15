<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->sentence;
        $slug = str_replace(' ', '-', $title);

        return [
            'slug' => $slug,
            'title' => $title,
            'body' => $this->faker->text(700),
            'image' => $this->faker->image(public_path('storage'), 800, 550, null, false)
        ];
    }
}
