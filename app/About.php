<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['introduction_content','introduction_image','approach_work_content','approach_work_image','giving_back_content','giving_back_image','profitability_content','profitability_image'];
}
