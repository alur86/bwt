<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


 public $timestamps = true;	
    
 protected $table = 'companies';




  public function users(){

   return $this->hasMany('App\User');
    
  }


  public function country(){

    return $this->belongsTo('App\Country');
  }


}
