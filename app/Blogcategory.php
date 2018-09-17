<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $table = 'blog_category';
    protected $fillable = ['category_title','show_front'];
}
