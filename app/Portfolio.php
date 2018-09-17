<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    protected $fillable = ['portfolio_title','portfolio_category','portfolio_image','portfolio_content','portfolio_url','show_front'];
}
