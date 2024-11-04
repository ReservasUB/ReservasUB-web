<?php

namespace Database\Factories;

use App\Models\TipoLocal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoLocal>
 */
class TipoLocalFactory extends Factory
{
    protected $model = TipoLocal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word,
        ];
    }
}
