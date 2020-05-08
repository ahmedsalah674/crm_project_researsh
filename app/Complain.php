<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    
    protected $fillable = [
        'title','details','image','customer_id','employee_id','state',
      ];
  
      public function getImageAttribute($value)
      {
        return asset('images/complains/'.$value);
      }
}
