<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index(){
        $registros = Funcionarios::all();

        return view('admin.funcionarios.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.funcionarios.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();

        Funcionarios::create($dados);
        return redirect()->route('admin.funcionarios');
    }

    public function editar($id){
        $registro = Funcionarios::find($id);
        return view('admin.funcionarios.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        Funcionarios::find($id)->update($dados);

        return redirect()->route('admin.funcionarios');
    }

    public function deletar($id){
        Funcionarios::find($id)->delete();
        return redirect()->route('admin.funcionarios');
    }
}
