<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function cities()
    {
      return $this->hasMany(City::class);  
    }
    public function companies()
    {
      return $this->hasMany(Company::class);  
    }
    public function universities()
    {
      return $this->hasMany(University::class);  
    }
}
