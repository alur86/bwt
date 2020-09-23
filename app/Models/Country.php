<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

 public $timestamps = true;	
    
 protected $table = 'countries';


  public function company(){

      return $this->hasOne('App\Company');
      
    }


}
