<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table = 'inquiry';
    protected $fillable = ['inquiry_name','inquiry_email','inquiry_subject','inquiry_massage','inquiry_contact_number'];
}
