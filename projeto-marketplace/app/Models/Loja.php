<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Loja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'endereco',
        'cidade', 
        'estado', 
        'telefone',
        'email', 
        'cnpj', 
        'password'
    ];

    public function setTipoAttribute($value)
    {
        $this->attributes['tipo'] = ucfirst($value);
    }
}

