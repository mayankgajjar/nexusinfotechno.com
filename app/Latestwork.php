<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latestwork extends Model
{
    protected $table = 'latestwork';
    protected $fillable = ['latestwork_title','latestwork_image','latestwork_category','show_front'];
}
