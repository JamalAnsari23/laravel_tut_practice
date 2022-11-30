<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\student;

use App\Http\Controllers\FormController;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\UserAuth;

use App\Http\Controllers\StoreController;

use App\Http\Controllers\UploadController;

use App\Http\Controllers\Membercontroller;

use App\Http\Controllers\Memberscontroller;

use App\Http\Controllers\MemberS;

use App\Http\Controllers\AggregatesController;

use App\Http\Controllers\EmployeeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function () {
    return view('welcome');
});

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['user'=> $name]);

    // name is not necessary we also use user instead of name , name is not important
// });


// Route::get('/{name}', function ($name) {
    // echo $name;
//     return view('hello');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact',function () {
//     return view('contact');
// });

// Route::get('/gallery', function () {
//     return view('gallery');
// });

Route::view("about",'/about');

Route::view("contact",'/contact');

Route::view("gallery", '/gallery');


Route::get("user/{id}",[UserController::class,'show']);
//this is how to data pass through controller

// Route::view("users /{name}",'/users');

Route::get('/user/{name}', function($name){
    return view('users',['user'=>$name]);
});

Route::view("about","components/header",['title'=>'Jamal']);  

Route::get('/test',function() {
    return view('test');
});

Route::get('/test1',function() {
    return view('test1');
});

Route::get('/students',[student::class,'loadview']);






//for middleware
Route::view('user','user')->middleware('protectedPage');

Route::view('check','check')->middleware('protectedPage');

Route::view('noaccess','noaccess');

//grouped middleware

Route::group(['middleware'=>['protectPage']],function(){
    // Route::view('user','user');
    // Route::view('check','check');
});

Route::get('users',[UserController::class,'index']);

Route::get('students',[StudentController::class,'getdata']);

//for Api

Route::get('apis',[UserController::class,'api']);


Route::POST('form',[FormController::class,'getData']);
// Route::put('form',[FormController::class,'getData']);
//we can forcefully add put method in form
// Route::view('login','form');


// for session

Route::POST('useraction',[UserAuth::class,'userLogin']);
// Route::view('session','login');
Route::get('/session',function ()
{
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::view('profile','profile');
Route::get('/logout',function ()
{
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('session');
});

//flash session

Route::view('store','storeuser');

Route::POST('storecontroller',[StoreController::class,'store']);

//for upload file

Route::view('upload','uploadfile');

Route::POST('uploadfile',[UploadController::class,'index']);



// for localization

// Route::view('profilep','profilepage');
//there are two way for access localization first way is change in config->app.php  here we set locale language in locale variable 2nd way is set in route just like down code
Route::get('profilep/{lang}',function($lang){
    App::setlocale($lang);
    return view('profilepage');
});

//get data from database
Route::get('list',[Membercontroller::class,'show']);
// for delete data into database
Route::get('delete/{id}',[Membercontroller::class,'deleterow']);
//for update data into database
Route::get('edit/{id}',[Membercontroller::class,'showData']);
Route::POST('edit',[Membercontroller::class,'update']);

//save data into database
Route::view('add','addmember');
Route::POST('adddata',[Memberscontroller::class,'savedata']);


// for eloquent
Route::get('eloq',[MemberS::class,'operations']);


// for Aggregate()

Route::get('aggregate',[AggregatesController::class,'operations']);

//for join

Route::get('join',[EmployeeController::class,'getData']);





