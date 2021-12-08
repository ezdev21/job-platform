<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    public function city()
    {
      return $this->belongsTo(City::class);  
    }
    public function country()
    {
      return $this->belongsTo(Country::class);  
    }
}
