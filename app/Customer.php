<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'profile', 'phoneno', 'address', 'user_id'
  ];
}
