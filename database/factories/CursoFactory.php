<?php



namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 5),
            'name' => $this->faker->unique()->word(),
            'slug' => $this->faker->word(),
            'description' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
