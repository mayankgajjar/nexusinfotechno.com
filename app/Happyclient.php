<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Happyclient extends Model
{
    protected $table = 'happyclient';
    protected $fillable = ['name','image','show_front'];
}
