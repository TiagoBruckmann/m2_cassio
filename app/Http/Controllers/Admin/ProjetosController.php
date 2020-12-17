<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Projetos;

class ProjetosController extends Controller
{
    public function index(){
        $registros = Projetos::all();
        return view('admin.projetos.index', compact('registros'));
    }

    public function adicionar(){
        $clientes = \App\Clientes::all(['id', 'clientes']);

        
        return view('admin.projetos.adicionar', compact('clientes'));
    }

    public function salvar( Request $req ){
        $dados = $req->all();
        $clientes = $req->get('clientes', null);

        Projetos::create($dados, $clientes);

        return redirect()->route('admin.projetos');

    }

    public function editar($id){
        $registro = Projetos::find($id);
        $clientes = \App\Clientes::all(['id', 'clientes']);

        return view('admin.projetos.editar', compact('registro', 'clientes'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $clientes = $req->get('clientes', null);

        Projetos::find($id)->update($dados);

        if(!is_null($clientes))
            $Projetos->clientes()->sync($clientes);

        return redirect()->route('admin.projetos');
    }

    public function deletar($id){
        Projetos::find($id)->delete();
        return redirect()->route('admin.projetos');
    }
}
