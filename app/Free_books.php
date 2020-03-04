<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Free_books extends Model
{
    protected $fillable=[
        'title',
        'photo',
        'file',
        'author_name',
        'category'
    ];
}
