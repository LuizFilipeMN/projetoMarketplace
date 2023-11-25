<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 10, 1000),
            'loja_id' => 1,
            'foto_url' => $this->faker->imageUrl(),
        ];
    }
}
