<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

//direct connect to database 
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    function getUser(){
        return "sonu singh";
    }

    function aboutUser(){
        return "I am a user";
    }

    function getUserName($name){
        return "Hello, $name";
    }

    function viewCall($name){
      
        return view( 'user', ['name'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }


    function userHome(){
        if(View::exists('home.login')){
            return view('home.login');

        }else{
            return "View not found";
        } 
    }

    function aboutBlade(){
        $name= "sas";
        $users=['sonu','anil', 'suresh'];
        return view('blade.about', ["name"=>$name, "users"=>$users]);
    }


    function subView(){
        return view('subView.home');
    }

    function component(){
        return view('components.home');
    }

    function componentAbout(){
        return view('components.about');
    }


    function formSubmit(Request $request){
        echo $request->email;
        echo $request->password;
    }

    function formSubmit2(Request $request){
        // return $request;
        echo $request->gender;
        echo "<br/>";
        echo $request->city;
        echo "<br/>";
        echo $request->age;
        echo "<br/>";
        print_r($request->skill);

    }

    
    //form validation
    function formValidation(Request $request){
      $request->validate([
        'email'=>'required | email',
        'password'=>'required | min:5| max:10 | uppercase',
      ],[
        'password.uppercase'=>'password should be in uppercase',
      ]
    );
      return $request;
    }


    function urlGeneration(){
        return view('urlGeneration.url');
    }
    

    function show(){
    //    return view('namedRoutes');
    //    return redirect()->to('named/namedroutes/about');  //first way
       return to_route('ab');  //second way
    }

    
    function user(){
        return view('user');
    }


    // prefix with group
    function show1(){
        return "show 1";
    }

    function add (){
        return "add 1";
    }


    // grouping with route controller
    function groupController(){
        return "group controller";
    }
    

    function add1(){
        return "group add";
    }

    function delete(){
        return "group delete";
    }

    function about($name){
        return  $name;
    }


    // database to connect controller
    function connect(){
        $users= DB::select('select * from users');
        return view('dbConnect.user', ['users'=> $users]);
    }   
    
    

    
};