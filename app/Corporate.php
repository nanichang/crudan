<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
  protected $fillable = [ 
    'project_name', 
    'mailing_address',
    'phone_number',
    'email_address',
    'website',
    'office_address',
    'contact_person',
    'year_founded',
    'vision_mission',
    'activities',
    'challenges',
    'expections',
    'document'
  ];
}
