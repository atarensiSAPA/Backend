<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articlesModel;

class articlesController extends Controller
{
    public function mostrarC(Request $request){
        $perPage = $request->input('nArticles', 5);
        $data = articlesModel::paginate($perPage);
        
        return view('welcome', ['articles' => $data]);
    }

    public function mostrarArticlesUser(Request $request){
        
    }
}
