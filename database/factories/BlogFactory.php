<?php

namespace Database\Factories;

use App\Models\Assets;
use App\Models\Blog;
use App\Models\CoverImage;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text('10'),
            'content' => $this->faker->paragraph('2'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Blog $blog) {
            session()->put('blog_id', $blog->id);
            CoverImage::factory(1)->create();
            Assets::factory(2)->create();
            session()->forget('blog_id');
        });
    }
}
