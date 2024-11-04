<?php

namespace Database\Factories;

use App\Models\Local;
use App\Models\TipoLocal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{
    protected $model = Local::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company,
            'tipo_local_id' => TipoLocal::inRandomOrder()->first()->id ?? TipoLocal::factory(),
        ];
    }
}
