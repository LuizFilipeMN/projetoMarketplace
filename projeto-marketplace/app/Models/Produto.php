<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'loja_id', 'foto_url'];

    public function loja()
    {
        return $this->belongsTo(Loja::class);
    }
}