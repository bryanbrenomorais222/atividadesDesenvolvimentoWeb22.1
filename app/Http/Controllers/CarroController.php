<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    //
    function cad_novo(){
        return view('novo_carro');
    }

    function novo(Request $req){
        
        $marca = $req->input('marca');
        $modelo = $req->input('modelo');
        $preco = $req->input('preco');

        $carro = new Carro();
        $carro->marca = $marca;
        $carro->modelo = $modelo;
        $carro->preco = $preco;

        $carro->save();

        return redirect()->route('carros_listar');
    }

    function listar(){
        $carros = Carro::all();
        return view('lista_carro',['carros' => $carros]);
    }
}
