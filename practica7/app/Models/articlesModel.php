<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articlesModel extends Model
{
    use HasFactory;
    public $table = 'articles';

    public $fillable = ['article', 'id_usuari'];
}