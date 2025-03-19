<?php

use Illuminate\Support\Facades\App; // use for set lang
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\modelController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Session;

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view("home", "home");

//dynamic data
Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about', ['name' => $name]);
});


//redirect route
Route::redirect('home', '/');




// controller call
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/userabout', [UserController::class, 'aboutUser']);
Route::get('/getname/{name}', [UserController::class, 'getUserName']);


//call controlller with view and send dynamic data to view
Route::get("view/{name}", [UserController::class, 'viewCall']);

Route::get('admin', [UserController::class, 'adminLogin']);
Route::get('userhome', [UserController::class, 'userHome']);


//about blade 
Route::get("aboutblade", [UserController::class, "aboutBlade"]);



//SubView
Route::get("subview", [UserController::class, "subView"]);

//component 
Route::get('component', [UserController::class, 'component']);
Route::get('componentabout', [UserController::class, 'componentAbout']);


//form submit
Route::view("form", "form.user");
Route::post('adduser', [UserController::class, 'formSubmit']);


// form2 submit
Route::view("form2", "form2.user");
Route::post('adduser2', [UserController::class, 'formSubmit2']);


// form validation
Route::view("formvalidation", "formValidation.form");
Route::post('addData', [UserController::class, 'formValidation']);


//url Generation
Route::view('home', 'urlGeneration.home');
Route::view('about', 'urlGeneration.about');



//named Route
Route::view('/', 'namedRoutes.home');
Route::view('named/namedroutes/about', 'namedRoutes.about')->name('ab');
Route::get('show', [UserController::class, 'show']);
Route::get('user', [UserController::class, 'user']);



//prefix with group
Route::prefix('student')->group(function () {
    Route::view('/group', 'prefixWithGroup.home');
    Route::get('/show1', [UserController::class, 'show1']);
    Route::get('/add', [UserController::class, 'add']);
});


//group with controller
Route::controller(UserController::class)->group(function(){
    Route::get('groupController', 'groupController');
    Route::get('groupadd', 'add1');
    Route::get('groupdelete', 'delete');
    Route::get('about/{name}', 'about');
});



//middleware 
Route::view('middleware', 'middleware.home');


// group middleware
Route::view('middlewarehome', 'middleware.home')->middleware('check1');


// group middleware
Route::middleware('check1')->group(function(){
    Route::view('sonu1', 'middleware.home');
    Route::view('sonu2', 'middleware.about');
    Route::view('sonu3', 'middleware.home');
});


// middleware route
use App\Http\Middleware\routeMiddleware;
use Illuminate\Support\Facades\Redis;

Route::view('routeMiddle', 'middleware.routePage')->middleware(routeMiddleware::class);


// connect to database    
Route::get('connect', [UserController::class, 'connect']);

// Eloquent Model in laravel
Route::get('model', [modelController::class, 'modelConnect']);


// making api
Route::get('api', [modelController::class, 'getUserModel']);  


// databaseQuery
Route::get('databaseQuery', [modelController::class, 'databaseQuery']);


// Eloquent Model: query builder
Route::get('eloquentmodel', [modelController::class, 'eloquentModel']);



// //All routes 
Route::view('routeForm', 'routes.form');
// Route::get('user', [modelController::class, 'get']);  //get route to submit form 
// Route::post('user', [modelController::class, 'post']);  //post route to submit form 
// Route::put('user', [modelController::class, 'put']);  //put route to submit form 
// Route::delete('user', [modelController::class, 'delete']);  //delete route to submit form 


//any route 
Route::any('user', [modelController::class, 'any']);  //any route to


// match route
Route::match(['get', 'post'], 'user', [modelController::class, 'group1']); // 


// laravel http request Class
Route::view('classForm', 'httpRequestClass.user');
Route::post('user', [modelController::class, 'httpRequestClass']); //



//laravel session
Route::view('session', 'session.login');
Route::view('userProfile', 'session.profile');


Route::post('user', [modelController::class, 'session']); //
Route::get('logout', [modelController::class, 'logout']); //


//flash session
Route::view('flash', 'flashSession.user');
Route::post('add', [modelController::class, 'flashSession']); //

//upload file
Route::view('upload', 'uploadFile.file');
Route::post('uploadFile', [modelController::class, 'uploadFile']); //



//Localization use for language
Route::middleware('setLang')->group(function () {
    Route::get('localization', function () {
        return view('welcome');
    });

    //set language for specfic route
    Route::get('localizationAbout/{lang}', function ($lang) {
        App::setLocale($lang);
        return view('Localization.about');
    });

    Route::get('setlang/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return redirect('/localization');
    });
});



// full curd operation with database 
//data inset into table of database  and display route
Route::view('insertData', 'dataInsertIntoDb.insert'); //load the view 
Route::post('addStudent', [modelController::class, 'addStudent']); // insert data into table
Route::get('diplayData', [modelController::class, 'displayData']); // display data from table
Route::get('delete/{id}', [modelController::class, 'deleteData']); // delete data from table
Route::get('edit/{id}', [modelController::class, 'editData']); // populate data into inputs from table
Route::put('editStudent/{id}', [modelController::class, 'editStudent']); // edit data into  table
Route::get('search', [modelController::class, 'search']); // edit data into  table
Route::post('deleteMulti', [modelController::class, 'deleteMulti']); // Delete multiple records from table



//Upload and Display image with database
Route::view('upload', 'imageUpload.upload'); //display the form to upload image
Route::post('upload', [ImagesController::class, 'upload']); // upload the image to database
Route::get('display', [ImagesController::class, 'displayImages']); // display the image from database


//Building Layout with component
Route::view('layoutHome', 'layoutComponent.home'); //display the HOME layout
Route::view('layoutAbout', 'layoutComponent.about'); //display the about layout


//use css and js 
Route::view('useCssaAndJs', 'useCss&Js.index'); //display the view

   
//template Layout route
Route::view('templateLayout', 'templateLayout.layout'); //template route 
Route::view('templateLogin', 'templateLayout.login');// loing page route 
Route::view('templateHome', 'templateLayout.home');// home page route


//stubs 
Route::get('stubs', [modelController::class, 'index']); //display the stubs


//laravel accessors
Route::get('accessors', [modelController::class, 'accessors']); //display data with accessors on UI


// laravel Mutators
Route::get('mutators', [modelController::class, 'mutators' ]);

// Laraval table relationship
//one to one relationship
Route::get('oneToOne', [SellerController::class, 'one_To_One_RelationShip' ]);

//one to one relationship
Route::get('oneToMany', [SellerController::class, 'one_To_Many_RelationShip' ]);

//many to one relationship
Route::get('manyToOne', [SellerController::class, 'Many_to_one_RelationShip']);

//MailController
Route::view('mail', 'sendMail.index');
Route::get('mailController', [MailController::class, 'MailController']);


//email send using form 
Route::view('emailForm', 'sendEmailByForm.form');
Route::post('send_email', [MailController::class, 'MailController']);
