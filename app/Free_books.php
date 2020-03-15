<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Free_books extends Model
{
    protected $fillable=[
        'title',
        'photo',
        'file',
        'author_id',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
}
