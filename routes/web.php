<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;

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
Route::get('/registry',[vehicleController::class,'registry']);
Route::get('/AddVehicle',[vehicleController::class,'AddVehicle']);
Route::post('/saveVehicle',[vehicleController::class,'saveVehicle']);
Route::get('/editVehicle/{id}',[vehicleController::class,'editVehicle']);
Route::post('/updateVehicle',[vehicleController::class,'updateVehicle']);
Route::get('/deleteVehicle/{id}',[vehicleController::class,'deleteVehicle']);
Route::post('/deletedVehicle',[vehicleController::class,'deletedVehicle']);
Route::get('/Vehicletype',[vehicleController::class,'Vehicletype']);
Route::post('/saveVehicletype',[vehicleController::class,'saveVehicletype']);
Route::get('/RegVehicletype',[vehicleController::class,'RegVehicletype']);
Route::get('/editVehicle1/{id}',[vehicleController::class,'editVehicle1']);
Route::get('/deleteVehicle1/{id}',[vehicleController::class,'deleteVehicle1']);
Route::post('/updateVehicletype',[vehicleController::class,'updateVehicletype']);
