<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use Illuminate\Pagination\Paginator;

class articlesController extends Controller
{
    public function mostrarC(Request $request){
        Paginator::useBootstrapFour();

        $perPage = $request->input('numArt', 5);
        //llamar a la funcion del modelo mostrarC
        $bd = articles::mostrarC();

        $data = articles::paginate($perPage);
        
        return view('welcome',  ['articles' => $data, 'numArt' => $perPage]);
    }

    public function mostrarArticlesUser(Request $request){
        Paginator::useBootstrapFour();

        $perPage = $request->input('numArt', 5);
        $data = articles::paginate($perPage);
        
        return view('dashboard', ['articles' => $data, 'numArt' => $perPage]);
    }
}
