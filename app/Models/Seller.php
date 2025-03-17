<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    public $timeStamps=false;

    // one to one relationship with user
    function one_to_one(){
        return $this->hasOne('App\Models\Product', 'seller_Id');
    }

    // one to many relationn with user
    function one_to_many(){
        return $this->hasMany('App\Models\Product', 'seller_Id');
    }

    
}
