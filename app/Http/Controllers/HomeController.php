<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animes;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

       return view('welcome');
    }


    public function anyData(){

        $animes = Animes::select('animes.id', 'animes.title', 'animes.release_year', 'animes.studio', 'animes.creator');  
        return DataTables::of($animes)
        ->addColumn('acao', function ($anime) {
            return '<a href="' . route('anime-show', ['id' => $anime->id]) . '" class="btn btn-primary btn-sm">Editar</a> 
                    <a href="" class="btn btn-danger btn-sm">Excluir</a> 
            ';
        })
        ->rawColumns(['acao'])
        ->make(true); 
    }
}
