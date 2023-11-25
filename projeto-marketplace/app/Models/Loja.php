<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
<<<<<<< Updated upstream
    use HasFactory;

    protected $fillable = ['nome', 'endereco', 'cidade', 'estado', 'telefone', 'email', 'cnpj'];
=======
    protected $fillable = ['nome', 'endereco', 'cidade', 'estado', 'telefone', 'email', 'senha', 'cnpj'];
>>>>>>> Stashed changes

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
