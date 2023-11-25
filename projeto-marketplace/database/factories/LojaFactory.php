<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Loja;

class LojaFactory extends Factory
{
    protected $model = Loja::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company,
            'endereco' => $this->faker->address,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'cnpj' => $this->faker->unique()->numerify('###########'),
        ];
    }
}
