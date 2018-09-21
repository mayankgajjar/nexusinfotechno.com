<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['blog_title','blog_image','blog_category','blog_slug','show_front','blog_content'];
}
