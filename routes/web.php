<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\StateController;
Use App\Http\Controllers\AddressController;
Use App\Http\Controllers\UserUpdateController;
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
    return view('index');
})->name('home');


Route::get('/products', function(){
    return view ('products');
})->name('products');

Route::get('/myaccount', function(){
    if(!Auth()->User())
    {
        return redirect(route('login'));
    }
    $addr = AddressController::GetUserAdresses();
   return view('myaccount', ['addr' => $addr]);
})->name('myaccount');

Route::get('/myaccount/adresses', function(){
    if(!Auth()->User()) {
        return redirect(route('login'));
    }
    $addr = AddressController::GetUserAdresses();
    $states = StateController::GetStateList();
    if(count($addr) >= 5)
    {
        return redirect(route('myaccount'));
    }
    return view('adresses', ['addr' => $addr, 'states' => $states]);
})->name('adresses');


Route::post('/myaccount/upd', [UserUpdateController::class, 'UpdateUser'])->name('upd_user');
Route::post('/myaccount/address/del', [AddressController::class, 'DeleteAddress']) -> name ('del_address');
Route::post('/myaccount/address/add', [AddressController::class, 'CreateAddress']) -> name ('add_address');


Auth::routes();
