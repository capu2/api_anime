<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animes;
use Yajra\DataTables;

class AnimeApiController extends Controller
{
    // Listar todos os animes
    public function index()
    {   
        return response()->json(Animes::all(), 200);
    }

    // Criar um novo anime
    public function storeAnime(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer',
            'studio' => 'nullable|string|max:255',
            'creator' => 'nullable|string|max:255',
        ]);

        $animes = Animes::create([
            'title' => $request->nome,
            'short_description' => $request->descricao,
            'release_year' => $request->lancamento,
            'studio' => $request->estudio,
            'creator' => $request->criador
        ]);

        return response()->json([
            'message' => 'Item cadastrado com sucesso!',
            'data' => $animes
        ], 201);
    }

    // Exibir um anime específico
    public function show($id)
    {
        $anime = Animes::find($id);
        if (!$anime) {
            return response()->json(['message' => 'Anime não encontrado'], 404);
        }
        return response()->json($anime, 200);
    }

    // Atualizar um anime
    public function update(Request $request, $id)
    {
        $anime = Animes::find($id);
        if (!$anime) {
            return response()->json(['message' => 'Anime não encontrado'], 404);
        }

        $anime->update($request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer',
            'studio' => 'nullable|string|max:255',
            'creator' => 'nullable|string|max:255',
        ]));

        return response()->json($anime, 200);
    }

    // Deletar um anime
    public function destroy($id)
    {
        $anime = Animes::find($id);
        if (!$anime) {
            return response()->json(['message' => 'Anime não encontrado'], 404);
        }

        $anime->delete();
        return response()->json(['message' => 'Anime deletado com sucesso'], 200);
    }
}

