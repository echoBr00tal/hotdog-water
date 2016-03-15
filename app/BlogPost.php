<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {

    protected $fillable = [
        'title',
        'body',
        'author',
        'blog_category_id',
        'slug',
        'summary',
        'published',
    ];

}
