<?php

namespace App\Http\Controllers;

use App\Models\Escolas;
use Illuminate\Http\Request;

class EscolasController extends Controller
{

    public function index() // Página inicial
    {
        $dados = Escolas::all();
        return view('inicio', compact('dados'));
        
    }

  
    public function create() // Formulário dados
    {
        return view('adicionar');
    }

   
    public function store(Request $request) // Guardar dados 
    {
        //Os dados não querem subir
        $escolas = new Escolas();
        $escolas->Id_school = $request->post('Escola');
        $escolas->Nome = $request->post('Nome');
        $escolas->Localização = $request->post('Localização');
        $escolas->save();
        return redirect()->route("escolas.index")->with("success", "Adicionado com sucesso!");
    }

    public function show($id) // Obter registro de na tabela
    {
        $escolas = Escolas::find($id);
        return view("deletar", compact('escolas'));
        
    }

  
    public function edit($id) // Trazer os dados e editar. Colocar no formulário
    {
        $escolas = Escolas::find($id);
        return view("atualizar", compact('escolas'));
       // echo $id;
    }

  
    public function update(Request $request, $id) // Atualiza os dados
    {
        $escolas = Escolas::find($id);
        $escolas = new Escolas();
        $escolas->Id_school = $request->post('Escola');
        $escolas->Nome = $request->post('Nome');
        $escolas->Localização = $request->post('Localização');
        $escolas->save();
        return redirect()->route("escolas.index")->with("success", "Atualizado com sucesso!");
    }

 
    public function destroy($id) // Deleta o registro
    {
        $escolas = Escolas::find($id);
        $escolas->delete();

        return redirect()->route("escolas.index")->with("success", "Deletado com sucesso!");
    }
}
