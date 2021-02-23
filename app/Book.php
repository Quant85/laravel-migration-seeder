<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
    'title',
    'isbn',
    'author',
    'pages', 
    'imageFile',//potrei non passarla 
    'price',
    ];
}
