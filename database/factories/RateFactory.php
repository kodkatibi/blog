<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $article = Article::inRandomOrder()->first();
        return [
            'article_id' => $article->id,
            'user_id' => User::inRandomOrder()->where('id', '!=', $article->user_id)->first()->id,
            'point' => rand(1, 5)
        ];
    }
}
