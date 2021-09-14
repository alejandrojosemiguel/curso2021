<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commentable_id' => $this->faker->randomElement(range(1,100)),
            'commentable_type' => Curso::class, 
            'mensaje' => $this->faker->paragraph(),
            'user_id' => $this->faker->randomElement(range(1,10)),
        ];
    }
}
