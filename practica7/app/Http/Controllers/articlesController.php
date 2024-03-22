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

        $data = articles::paginate($perPage);
        
        return view('welcome',  ['articles' => $data, 'numArt' => $perPage]);
    }

    public function mostrarArticlesUser(Request $request){
        Paginator::useBootstrapFour();

        //mirar que id tiene el usuario logeado y mostrar solo sus articulos
        $perPage = $request->input('numArt', 5);

        $data = articles::where('id_usuari', auth()->user()->id)->paginate($perPage);

        return view('dashboard',  ['articles' => $data, 'numArt' => $perPage]);
    }

    public function destroy($id){
        $article = articles::find($id);
        $article->delete();
        return redirect('/dashboard');
    }

    public function edit($id){
        $article = articles::find($id);
        return view('/auth/edit',  ['article' => $article]);
    }

    public function update(Request $request, $id){
        $article = articles::find($id);
        $article->article = $request->input('article');
        $article->save();
        return redirect('/dashboard');
    }

    public function create(){
        return view('/auth/create');
    }

    public function store(Request $request){
        $article = new articles();
        $article->article = $request->input('article');
        $article->id_usuari = auth()->user()->id;
        $article->save();
        return redirect('/dashboard');
    }
}
