<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
    public function index(){
        $registros = Clientes::all();

        return view('admin.clientes.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.clientes.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();

        Clientes::create($dados);
        return redirect()->route('admin.clientes');
    }

    public function editar($id){
        $registro = Clientes::find($id);
        return view('admin.clientes.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        Clientes::find($id)->update($dados);

        return redirect()->route('admin.clientes');
    }

    public function deletar($id){
        Clientes::find($id)->delete();
        return redirect()->route('admin.clientes');
    }

    public function enviaDados(Request $req)
    {
        $id = $req->input('id');

        $client = Clientes::find($id);

        if ($client) {
            $response = Http::post('link aqui', [
                'nome' => $client->name,
                'fone' => $client->fone
            ]);
        }

    }

    public function recebeDados(Request $req)
    {
        $response = Http::get('link aqui', [
            'nome' => '{{ clientes }}',
            'fone' => '{{ fone }}'
        ]);
    }
}
