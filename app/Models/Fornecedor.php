<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carro;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedores";

    function carros(){
        return $this->hasMany(Carro::class, 'id_fornecedor', 'id');
    }
}
