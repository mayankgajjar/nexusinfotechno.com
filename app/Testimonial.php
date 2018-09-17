<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    protected $fillable = ['name','image','comment','is_approved','show_front','rating','designation'];
}
