<?php

use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TongController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;


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






// Route::get('admin', function () {
//     return view('addRoom');
// });

// Route::get('admin',[AdminController::class,'index']);
// Route::post('admin',[AdminController::class,'addRoom']);
// Route::get('trangchu',[PageController::class,'getIndex']); 

Route::get('loai',[PageController::class,'getProduct_type']);
Route::get('sp',[PageController::class,'getProduct']);




// Route::get('/', function () {
//     return view('welcome');
// });
//   Route::group(['prefix'=>'MyGroup'],function(){
//     Route :: get('User1',function(){
//         echo "User1";
//     });
//     Route :: get('User2',function(){
//         echo "User2";
//     });
//     Route :: get('User3',function(){
//         echo "User3";
//     });
// });
// Route::get('signup',[signupController::class,'index']);
// Route::post('signup',[signupController::class,'displayInfor']);

// Route::get('act2',[act2Controller::class,'index']);
// Route::post('act2',[act2Controller::class,'index']);

// Route::get('home', [UserController::class, 'index']);

// Route::get('tinhtong',[TongController::class,function(){
//     return view('sum');
// }]);
// Route::post('tinhtong',[TongController::class,'tinhtong']);






