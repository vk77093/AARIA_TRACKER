<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trackermaster extends Model
{
  protected $fillable= [
  'user_id','comp_name','address','mobileNum','designation','natureBuss','dateOfVisit','purposeVisit','mom','visitStatus','reviewpoints','comptbrand','Interested','callProd',
];



public function user(){
    return $this->belongsTo('App\User');
  }
}
