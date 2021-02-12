<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
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

Route::get('/', homeController::class);



Route::get('/user',[userController:: class,'index']);

Route::get('/user/create', function () {
    
});

    
Route::get('users/{id}', function ($id) {

});



/*Route::get('user/{id}/{nivel?}', function ($id,$nivel=null) {
   if(!$nivel){
    return "su id es ".$id;
   }else{
    return "bienvenido user nª".$id." nivel de cargo ".$nivel;
   }
    
});

*/