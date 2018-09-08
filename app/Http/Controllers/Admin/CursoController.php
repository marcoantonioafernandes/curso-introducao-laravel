<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        //dd($dados);

        if(isset($dados['publicado'])) $dados['publicado'] = "sim";
        else $dados['publicado'] = "nao";

        //Verificando se existe algum arquivo na requisição
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";

            //Método utilizado para recuperar a extensão do arquivo
            $ext = $imagem->guessClientExtension();

            $nomeImagem = "imagem_".$num.".".$ext;

            //Movendo imagem para o diretório
            $imagem->move($dir, $nomeImagem);

            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }

    public function editar($id){
        $registro = Curso::find($id);
        return view("admin.cursos.editar", compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        //dd($dados);

        if(isset($dados['publicado'])) $dados['publicado'] = "sim";
        else $dados['publicado'] = "nao";

        //Verificando se existe algum arquivo na requisição
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";

            //Método utilizado para recuperar a extensão do arquivo
            $ext = $imagem->guessClientExtension();

            $nomeImagem = "imagem_".$num.".".$ext;

            //Movendo imagem para o diretório
            $imagem->move($dir, $nomeImagem);

            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function deletar($id){
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
