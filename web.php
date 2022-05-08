<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personal;
use App\Http\Controllers\corporate;
use App\Http\Controllers\admin;
use App\Http\Controllers\admin_control;


Route::view('/','personal');  //kun page kholiraxa bhana lai
Route::view('/personal.php','personal');
Route::view('/corporate.php','corporate');
Route::view('/Tax_system.html','tax_system');



Route::get('/', [personal::class, 'showform']); //duitai option ma get garna milos bhanera
Route::get('/personal.php', [personal::class, 'showform']);

Route::post('/', [personal::class, 'submitform']); //duitai option ma post garna milos bhanera
Route::post('/personal.php', [personal::class, 'submitform']);




Route::get('/corporate.php', [corporate::class, 'showform']);

Route::post('/corporate.php', [corporate::class, 'submitform']);

Route::view('/admin(control)','admin(control)');

Route::get('/admin(control)', [admin_control::class, 'showform']); 
Route::post('/admin(control)', [admin_control::class, 'submitform']);
