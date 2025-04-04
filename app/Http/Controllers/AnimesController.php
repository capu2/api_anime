<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animes;
use Illuminate\Support\Facades\DB;


class AnimesController extends Controller
{    

    public function createAnime(){
        
        return view('anime.create');
    }

 
    public function storeAnime(Request $request)
    {           
       
        DB::beginTransaction();
        $Anime = Animes::create([
            'title' => $request->nome,
            'short_description' => $request->descricao,
            'release_year' => $request->lancamento,
            'studio' => $request->estudio,
            'creator' => $request->criador
        ]);
        
        try {
            DB::commit();
            return redirect(route('welcome'))->with('message', 'Anime cadastrado com sucesso.'); 
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('welcome')->with('message-error', 'Erro ao cadastrar anime.', $e);        
        }
    }

    public function showAnime($id_anime){
        $anime = Animes::where('id', $id_anime)->first();
        
        return view('anime.show')->with(compact('anime'));
    }

   
    public function updateAnime(Request $request, $id)
    {       
        $anime = Animes::findOrFail($id);

    //    dd($anime);
        DB::beginTransaction();
        $anime->update([
            'title' => $request->nome,
            'short_description' => $request->descricao,
            'release_year' => $request->lancamento,
            'studio' => $request->estudio,
            'creator' => $request->criador
        ]);
        
        try {
            DB::commit();
            return redirect(route('welcome'))->with('message', 'Anime atualizado com sucesso.'); 
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('welcome')->with('message-error', 'Erro ao atualizar anime.', $e);        
        }
    }

   
    public function destroy($id)
    {
        $anime = Animes::findOrFail($id);
        $anime->delete();
        return response()->json(null, 204); 
    }
}
