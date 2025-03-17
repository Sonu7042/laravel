<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Seller; //use seller Model 
use  App\Models\Product; //use Product Model 
use phpDocumentor\Reflection\Types\Self_;

class SellerController extends Controller
{
   // one to one relationship
   function one_To_One_RelationShip(){
      // return Seller::all();
      return Seller::find(1)->one_to_one;
   }

   //one to many relationship
   function one_To_Many_RelationShip(){
      return Seller::find(1)->one_to_many;
   }


   function Many_to_one_RelationShip(){
     $data= Product::with('seller')->get();
     return $data;
   }

}
