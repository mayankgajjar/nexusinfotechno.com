<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $fillable = ['title','slug','menu','mate_title','mate_keywords','mate_description','body','sub_menu'];
}
