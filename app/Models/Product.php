<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Product extends Model
{
    
    // public $timeStamps=false;


    public function seller(){
        return $this->belongsTo('App\Models\Seller');
    }


}
  