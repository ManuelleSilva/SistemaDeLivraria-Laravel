<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livraria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LivrariaController extends Controller
{
    public function MostrarHome()
    {
        return view('homeadm');
    }

    public function MostrarCadastroLivro()
    {
        return view('cadastrolivro');
    }

    public function CadastroLivros(Request $request)
    {
        $registros = $request->validate([
        'nomeLivro'=> 'string|required',
        'edicaoLivro'=> 'string|required',
        'editoraLivro'=> 'string|required',
        'autorLivro'=> 'string|required',
        ]);

        livraria::create($registros);
        return Redirect::route('homeadm');
    }

    public function Destroy(livraria $id)
    {
        $id->delete();
        return Redirect::route('homeadm')->with('success', 'Livro excluído com sucesso!');
    }

    public function Update(livraria $id, Request $request){
        $registros = $request->validate([
        'nomeLivro'=> 'string|required',
        'edicaoLivro'=> 'string|required',
        'editoraLivro'=> 'string|required',
        'autorLivro'=> 'string|required'
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('homeadm')->with('success', 'Livro atualizado com sucesso!');
    }

    public function MostrarLivroCodigo(livraria $id){
        return view('alteralivro',['registrosLivros'=>$id]);
    }

    public function MostrarLivroNome(Request $request){
        $registros = livraria::query();
        $registros->when($request->nomeLivro,function($query,$valor){
            $query->where('nomeLivro','like','%' . $valor .'%');
        });
        $todosRegistros = $registros->get();
        return view('listalivros', ['registrosLivros' => $todosRegistros]);
    }

}