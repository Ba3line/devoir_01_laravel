<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/savPage', function() {
    return view('savPage');
});

Route::get('/partenariatPage', function() {
    return view('partenariatPage');
});

Route::get('/infosPage', function() {
    return view('infosPage');
});

Route::get('frontendPage', function() {
    $equipeFront = array('Jhon Smith', 'Belinda Monschin', 'while smisse', 'tonisse tarque', 'toby mcgregor');
    $fonctionFront = array('Chef', 'stagiaire', 'senior', 'medior', 'medior');
    $arrayCombin = array_combine($fonctionFront, $equipeFront);
    return view('frontendPage', compact('arrayCombin'));
});

Route::get('/backendPage', function() {
    $equipeBack = array('toby mcgregor', 'while smisse', 'Belinda Monschin', 'tonisse tarque');
    $fonctionBack = array('Chef', 'stagiaire', 'senior', 'medior');
    $arrayCombinBack = array_combine($fonctionBack, $equipeBack);
    return view('backendPage', compact('arrayCombinBack'));
});

Route::get('/equipePage', function() {
    return view('equipePage');
});