<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'service';
    protected $fillable = ['service_title','service_icon','service_content','show_front'];
}
