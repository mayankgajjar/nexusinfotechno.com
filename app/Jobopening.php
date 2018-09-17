<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobopening extends Model
{
    protected $table = 'jobopening';
    protected $fillable = ['title','job_description','qualification','number_vacancy','salary','salary_negotiable','experience','location','type'];
}
