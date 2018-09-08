<?php

namespace App\Http\Controllers;
use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        //view dentro do diretório resources/view/contato/

        /*
        $contatos = [
            (object)["nome" => "Maria", "Telefone" => "65454546"], //convertendo cada elemento da lista para um objeto
            (object)["nome" => "Marco", "Telefone" => "12121166"]
        ];
        */

        $contatos = [
            (object)["nome" => "Maria", "Telefone" => "65454546"], //convertendo cada elemento da lista para um objeto
            (object)["nome" => "Marco", "Telefone" => "12121166"]
        ];

        $contato = new Contato();
        $lista_contatos = $contato->lista();
        dd($lista_contatos->nome3);


        //segundo parâmetro passa a referência do array
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        //dd($req['nome']);
        dd($req->all);
        return "Esse é o Criar do ContatoController";
    }

    public function editar(){
        return "Esse é o Editar do ContatoController";
    }
}
