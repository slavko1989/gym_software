<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OnlinePaymentController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*Route::controller(HomeController::class)->middlware(['admin'])->group(function(){

});*/

Route::controller(HomeController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('gym_template/index','index');

});

Route::controller(OnlinePaymentController::class)->middleware(['auth','web_card'])->group(function(){
    Route::get('online_payment/online_members_payment','create');
    Route::post('online_payment/online_members_payment','store');
    Route::get('members/member_web_card/{id}','member_web_card');
    Route::get('members/member_web_card_pdf/{id}','member_web_card_pdf');
});

Route::controller(MemberController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('members/create','create');
    Route::post('members/create','store');
    Route::get('members/singl/{id}','singl_member');
    Route::get('members/delete/{id}','delete');
    Route::get('members/edit/{id}','edit');
    Route::post('members/edit/{id}','update');
});

Route::controller(CompanyController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('company/create','create');
    Route::post('company/create','store');
    Route::get('company/delete/{id}','delete');
    Route::get('company/edit/{id}','edit');
    Route::post('company/edit/{id}','update');
});

Route::controller(CatController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('cat/create','create');
    Route::post('cat/create','store');
    Route::get('cat/delete/{id}','delete');
    Route::get('cat/edit/{id}','edit');
    Route::post('cat/edit/{id}','update');
});

Route::controller(ProgramController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('programs/create','create');
    Route::post('programs/create','store');
    Route::get('programs/delete/{id}','delete');
    Route::get('programs/edit/{id}','edit');
    Route::post('programs/edit/{id}','update');
});

Route::controller(LocationController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('locations/create','create');
    Route::post('locations/create','store');
    Route::get('locations/delete/{id}','delete');
    Route::get('locations/edit/{id}','edit');
    Route::post('locations/edit/{id}','update');
    
});

Route::controller(TrainerController::class)->middleware(['auth','user_role'])->group(function(){
    Route::get('trainers/create','create');
    Route::post('trainers/create','store');
    Route::get('trainers/delete/{id}','delete');
    Route::get('trainers/edit/{id}','edit');
    Route::post('trainers/edit/{id}','update');
    Route::get('trainers/singl_trainer/{id}','singl_trainer');

    
});
