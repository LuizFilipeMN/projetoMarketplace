<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco', 'cidade', 'estado', 'telefone', 'email', 'cnpj', 'senha'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
