<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',function() {
    return view('person',[
        'name' => 'Shaina Mae B. Apondar',
        'age' => 22,
        'address' => 'Balaogan, Bula, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Edna',
            'age' => 32
        ],
        [
            'name' => 'Alan',
            'age' => 30
        ],
        [
            'name' => 'Ronnel',
            'age' => 29
        ],
        [
            'name' => 'Ryan',
            'age' => 27
        ],
        [
            'name' => 'Whena',
            'age' => 17
        ],
        ]
    ]);
    
});
