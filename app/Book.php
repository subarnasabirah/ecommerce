<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'price',
        'description',
        'image',
        'edition',
        'number_of_pages',
        'country',
        'language',
        'amount_in_stock',
        'review',
        'number_of_reviews'
    ];
}
