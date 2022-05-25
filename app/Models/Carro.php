<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fornecedor;

class Carro extends Model
{
    use HasFactory;
    protected $table = "carros";
    
    function fornecedor(){
        return $this->belogsTo(Fornecedor::class, 'id_fornecedor','id');
    }

}
