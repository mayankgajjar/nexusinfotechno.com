<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assingblogcategory extends Model
{
    protected $table = 'assign_blog_category';
    protected $fillable = ['blog_id','category_id'];
}
