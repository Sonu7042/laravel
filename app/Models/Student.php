<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table =  "collageStudents";   // this is way to connect the table name with the model when model and table name are different

    // function testFun(){
    //     return "testfunc";
    // }



    // laravel accessors to change particuler column value
    function getNameAttribute($val){
        // return "apple";  //change to name value to apple on UI not in table
        return ucfirst($val); // change to name value to first letter capital
    }

    function getPasswordAttribute($val){
        return "+91". $val; // change to password  value and +91 front of it
    }


    // laravel Mutators
    function setNameAttribute($val){
        $this->attributes['name'] = ucfirst($val);
    }
                                                                                
}
