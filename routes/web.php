<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\app;
use Illuminate\Support\Facades\Session;

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
Route::pattern('id' ,'[0-9]+');
Route::pattern('name' , '[a-zA-Z]+');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/{name?}',function($id, $name=null){
    return ' your User Id is '.$id.'and name is '.$name;
});

// Route::resource('user.show', "parentController ");


Route::resource('myfile', 'fileSystemController');

// Route::get('/newf'  ,function(){
     
//      return redirect('file');

// })->middleware('MyMid');

// Route::get('middle' , function(){
//     return  " It Is Middel Route After MW";
    
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'MyMid'], function () {
    Route::get('/newf'  ,function(){
     
             return view ('file');
        
        });

        Route::get('middle' , function(){
            return  " It Is Middel Route After MW";
            
        });
        
});

Route::get('/file/{lang}' , function($lang){
      
            app::setLocale($lang);
            return view ('file');
});


Route::get('lang/{locale}' , function($lang){
      Session::put('locale' , $lang);
      return redirect()->back();
});