<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:jogos',
            'categoria' => 'required',
            'ano_criacao' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        $jogo = new Jogo();
        $jogo->nome = $request->input('nome');
        $jogo->categoria = $request->input('categoria');
        $jogo->ano_criacao = $request->input('ano_criacao');
        $jogo->valor = $request->input('valor');
        $jogo->save();

        return redirect()->route('jogos-index')->with('message', 'Jogo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|unique:jogos,nome,'.$id,
            'categoria' => 'required',
            'ano_criacao' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        $jogo = Jogo::find($id);

        if (!$jogo) {
            return response()->json(['error' => 'Jogo não encontrado'], 404);
        }

        $jogo->nome = $request->input('nome');
        $jogo->categoria = $request->input('categoria');
        $jogo->ano_criacao = $request->input('ano_criacao');
        $jogo->valor = $request->input('valor');
        $jogo->save();

        return redirect('/jogos')->with('message', 'Editado com sucesso!');
    }

    public function destroy(Request $req)
    {
        Jogo::where('id', $req->id)->delete();
        echo json_encode(['success' => true]);
    }
}
