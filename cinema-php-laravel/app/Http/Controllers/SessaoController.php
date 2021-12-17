<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sessao;

class SessaoController extends Controller
{
    public function index()
    {
        $sessoes = Sessao::all();
        return view("home", compact("sessoes"));
    }

    public function adicionarPost(Request $req)
    {
        $nome = $req->get("nome");
        $filme = $req->get("filme");
        $cadeira = $req->get("cadeira");
        $sessao = null;

        if($req->get("id") == null) {
            $sessao = new Sessao();
        } else {
            $sessao = Sessao::findOrFail($req->get("id"));
        }

        $sessao->nome = $nome;
        $sessao->filme = $filme;
        $sessao->cadeira = $cadeira;
        $sessao->save();

        return redirect()->route("home");
    }

    public function deletar($id)
    {
        $sessao = Sessao::findOrFail($id);
        $sessao->delete();

        return redirect()->route("home");
    }

    public function atualizar($id)
    {
        $sessao = Sessao::findOrFail($id);
        $sessoes = Sessao::all();
        return view("home", compact("sessao", "sessoes"));
    }
}
