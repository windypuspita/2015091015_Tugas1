<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuppyController;

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
    $poppiess = [
        [
            "img" => "https://media.cnn.com/api/v1/images/stellar/prod/210602230802-01-puppy-social-skills-wellness-sci.jpg?q=w_1600,h_1453,x_0,y_0,c_fill",
            "tittle" => "Anjing Nemu di Jalan",
            "desc" => "sapiente amet cumque iste minima? Laudantium magni quo facilis expedita, a atque veniam!",
            "price" => "50.000"
        ],
        [
            "img" => "https://images.unsplash.com/photo-1546527868-ccb7ee7dfa6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVwcHl8ZW58MHx8MHx8fDA%3D&w=1000&q=80",
            "tittle" => "Anakan Campuran",
            "desc" => "Facere voluptate quidem libero recusandae voluptates sapiente amet cumque iste minima? Laudantium magni beatae ipsam adipisci quo facilis expedita, a atque veniam!",
            "price" => "150.000"
        ],
        [
            "img" => "https://www.akc.org/wp-content/uploads/2018/05/Three-Australian-Shepherd-puppies-sitting-in-a-field.jpg",
            "tittle" => "Anjing Sebatangkara",
            "desc" => "A adipisicing elit. Facere voluptate quidem libero recusandae voluptates sapiente amet cumque iste minima? Laudantium magni beatae ipsam adipisci quo facilis expedita, a atque veniam!",
            "price" => "200.000"
        ],
        ];
    return view('getpuppies',[
        "poppies" => $poppiess
    ]);
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/get-puppies', [PuppyController::class, 'index'])->name('getPuppies');
Route::get('/get-puppies/{id}', [PuppyController::class, 'show'])->name('getPuppyById');
