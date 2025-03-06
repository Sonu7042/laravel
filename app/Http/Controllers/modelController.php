<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // use for api
use Illuminate\Support\Facades\DB; // use for database query

use App\Models\User; // import for model
use App\Models\Student; // import for student model
use Symfony\Component\Console\Input\Input;

use function Pest\Laravel\get;
use function Pest\Laravel\json;

class modelController extends Controller
{
   function modelConnect()
   {
      $data = new \App\Models\Student;
      echo $data->testFun();
      $students = \App\Models\Student::all(); //importing model from student model   
      return view('dbConnect.students', ['data' => $students]);
   }


   function getUserModel()
   {
      $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');
      $response = $response->body();
      return view('dbConnect.api', ['data' => json_decode($response)]);
   }


   function databaseQuery()
   {
      $resutl = Db::table('users')->get();
      // $resutl = Db::table('users')->where('password', '123456')->get();
      // $resutl = Db::table('users')->first();
      // $resutl = [$resutl];




      // //insert data in mysql database
      // $resutl = Db::table('users')->insert([
      //    'email' => 'johndoe@gmail.com',
      //    'password'=> '123456',
      // ]);
      // if($resutl){
      //    return 'Data Inserted';
      // }else{
      //    return 'Data Not Inserted';
      // }




      //update user in mysql database
      // $result= Db::table('users')->where('email','sonu@gmail.com')->update(['password'=>'1234567890' ]);
      // if($result){
      //    return 'Data Updated';
      // }else{
      //    return 'Data Not Updated';
      // }



      // // delete user from mysql database
      // $result= Db::table('users')->where('email','sonu@gmail.com')->delete();
      // if($result){
      //    return 'Data Deleted successfully';
      // }else{
      //    return 'Data Not deleted successfully';
      // }



      // return $resutl;
      return view('databaseQuery.home', ['data' => $resutl]);
   }





   //  Eloquent Model: query builder 
   function eloquentModel()
   {
      $response = User::all();
      // $response= User::get();
      // $response= User::where('password','123456' )->get();
      // $response= User::where('password','123456' )->first();
      // $response=[$response]; 

      // $response= User::find(1);
      // $response=[$response]; 

      // $response= User::insert([
      //    'email'=>'sonu100@gmail.com',
      //    'password'=>'123456789',
      // ]);

      // if($response){
      //    return 'Data Inserted successfully';
      // }else{
      //    return 'Data Not Inserted successfully';
      // }


      // $response= User::where('email', 'sonu@gmail.com')->update(['password'=> '1234000']);
      // if($response){
      //    return 'Data updated successfully';
      // }else{
      //    return 'Data Not updated successfully';
      // }


      return view('databaseQuery.home2',  ['data' => $response]);
   }


   //routes
   // get route 
   function get(Request $req){
      // return $req;
      return 'get';
   }

    // post route 
    function post(Request $req){
      return $req;
   }

    // put route 
    function put(Request $req){
      return $req;
   }
   
    // delete route 
    function delete(Request $req){
      // return $req;
      return 'delete';
   }


   //about any route   
   function any(){
      return "this is any function";
   }

   //about match route   
   function group1(){
      return "group1";
   }


   // laravel http request Class
   function httpRequestClass(Request $req){
      echo "Request method is ". $req->method();
       echo "<br>";
       echo "Request method is ". $req->path();
       echo "<br>";
       echo "Request url is ". $req->url();
       echo "<br>";
       echo "name is ". $req->input('name');
       echo "<br>";
      //  echo "name is ". $req->name;
       echo "<br>";
      print_r($req->input());
       
      
       echo "<br>";
       echo "<br>";
      print_r($req->collect());

      
      echo "<br>";
       echo "<br>";
      if($req->isMethod('post')){
         echo "this is post request"; 
      }
      else{
         echo "this is not post request";
      }
      


      echo "<br>";
      echo "<br>";
      if($req->is('user')){
         echo "this is user path"; 
      }
      else{
         echo "this is not user path";
      }


      echo "<br>";
      echo "<br>";
      echo "IP address ". $req->ip();  
   }




   // laravel session
   function session(Request $req){
      $req->session()->put('username',$req->input('username')); //save username in session
      // echo session('username');
      return redirect('userProfile');
   }

   //logout user
   function logout(){
      session()->pull('username');
      return redirect('userProfile');
   }



   //flash session
   function flashSession(Request $req){
      //your db code here
      $req->session()->flash('message', 'Users added successfully');
      $req->session()->flash('name', 'sonu');
      return redirect('flash');
   }


   //upload file
   function uploadFile(Request $req){
      // echo 'upload called';
      // $path= $req->file('file')->store('public');
      $path= $req->file('file')->storeAs('public', 'dummy1.png');

       $filenNameArray= explode('/' ,$path);
       $fileName= $filenNameArray[1];
       return view('uploadFile.display', ['path'=> $fileName]);
   }


   //insert data in db table
   function addStudent(Request $req){
      $student= new Student();
      $student->name=$req->name;
      $student->email=$req->email;
      $student->password=$req->password;
      $student->save();
      if($student){
         echo 'student added';
      }else{
         echo 'student not added';
      }
   }


   //display data from db table
   function displayData(){
      $studentData=Student::paginate(3); //pagination 
      return view('dataInsertIntoDb.display', ['student'=> $studentData]);
   }

   //delete data fun
   function deleteData($id){
      echo $isDeleted=Student::destroy($id);
      if($isDeleted){
         return redirect('diplayData');
      }
   }

   //populate data fun
   function editData($id){
     $student= Student::find($id);
     return view('dataInsertIntoDb.editData', ['data'=> $student]);
   }


   //update data fun
   function editStudent(Request $req, $id){
      $student= Student::find($id);
      $student->name=$req->name;
      $student->email=$req->email;
      $student->password=$req->password;
      if($student->save()){
         return redirect('diplayData');
      }else{
         return 'Operation failed ';
      }
   }


   function search(Request $req){
      $searchData= Student::where('name', 'like', "%$req->search%")->get();
      return view('dataInsertIntoDb.display', ['student'=> $searchData, 'searchData' => $req->search]);
   }

      
      
   function deleteMulti(Request $req){
      $result= Student::destroy($req->ids);
      if($result){
         return redirect('diplayData');
      }else{
         return 'Operation failed ';
      }
   }


   function index(){
      return "some issue";
   }



}
