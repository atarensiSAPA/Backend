<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    use HasFactory;
    //conseguir los datos de la tabla articles
    public static function mostrarC(){
        return articles::all();
    }
}