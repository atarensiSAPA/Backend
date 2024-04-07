<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use Illuminate\Pagination\Paginator;

class articlesController extends Controller
{
    //Función para mostrar los artículos
    public function mostrarC(Request $request){
        Paginator::useBootstrapFour();

        $perPage = $request->input('numArt', 5);

        $data = articles::paginate($perPage);
        
        return view('welcome',  ['articles' => $data, 'numArt' => $perPage]);
    }

    //Función para mostrar los artículos de un usuario
    public function mostrarArticlesUser(Request $request){
        Paginator::useBootstrapFour();

        //mirar que id tiene el usuario logeado y mostrar solo sus articulos
        $perPage = $request->input('numArt', 5);

        $data = articles::where('id_usuari', auth()->user()->id)->paginate($perPage);

        return view('dashboard',  ['articles' => $data, 'numArt' => $perPage]);
    }

    //Función para destruir un artículo
    public function destroy($id){
        $article = articles::find($id);
        $article->delete();
        return redirect('/dashboard');
    }

    //Función para enviar "petición" de edición de artículo
    public function edit($id){
        $article = articles::find($id);
        return view('/auth/edit',  ['article' => $article]);
    }

    //Función para editar un artículo
    public function update(Request $request, $id){
        $article = articles::find($id);
        $article->article = $request->input('article');
        $article->save();
        return redirect('/dashboard');
    }

    //Función para enviar "petición" de creación de artículo
    public function create(){
        return view('/auth/create');
    }

    //Función para crear un artículo
    public function store(Request $request){
        $article = new articles();
        $article->article = $request->input('article');
        $article->id_usuari = auth()->user()->id;
        $article->save();
        return redirect('/dashboard');
    }
}
