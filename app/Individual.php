<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{

  protected $fillable = [ 
    'full_name',
    'mailing_address',
    'phone',
    'email',
    'church',
    'project',
    'interest',
    'activities',
    'challenges',
    'expections',
  ];
}
