<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->company;
        $body = $this->faker->text;
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $title,
            'body' => $body,
            'excerpt' => Str::limit($body, 50),
            'slug' => Str::slug($title.'-'.time()),
            'status' => 'PENDING',
        ];
    }
}
