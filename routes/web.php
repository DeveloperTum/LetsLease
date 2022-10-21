<?php
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;



 // Displays the welcome page with show property button
Route::get('/', function () {
    return view('welcome');
});



//displays a list of properties fetched from the database
Route::get('list', [PropertyController::class, 'index']);



//displays a form to add data to the database
Route::get('add', [PropertyController::class, 'create']);

//route to add new data to the database
Route::post('store-form', [PropertyController::class, 'store']);

Route::get('edit', [PropertyController::class, 'edit']);


Route:: put('edit-form', [PropertyController::class, 'update']);

Route:: delete('list', [PropertyController::class, 'destroy']);

