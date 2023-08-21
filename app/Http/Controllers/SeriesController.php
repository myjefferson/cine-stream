<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = [
            'Pinisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        return view('series.index', compact('series'));
    }

    public function create(Request $request){
        return view('series.create');
    }
}
