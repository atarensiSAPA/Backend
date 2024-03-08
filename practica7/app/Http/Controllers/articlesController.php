<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articlesModel;

class articlesController extends Controller
{
    public function mostrarC(){
        //llamar a la funcion mostrarArticles del modelo y enviar los datos a la vista
        $data = articlesModel::paginate(5);   
        return view('welcome', ['articles' => $data]);
    }
}
