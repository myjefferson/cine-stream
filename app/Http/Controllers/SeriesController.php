<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = Serie::query()->orderBy('nome')->get();
        
        return view('series.index', compact('series'));
    }

    public function create(Request $request){
        return view('series.create');
    }

    public function store(Request $request){
        if(Serie::create(['nome' => $request->nome])){
            return redirect(route('index'));
        }
        return "Erro";
        // Serie::create([
        //     'nome' => $request->nome
        // ]);
        // redirect(route('index'));        
    }
}
