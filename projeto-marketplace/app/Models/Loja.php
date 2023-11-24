<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = ['nome', 'endereco', 'cidade', 'estado', 'telefone', 'email', 'cnpj'];

    public function produtos()
    {
        return $this->hasMany(Uniforme::class);
    }
}
