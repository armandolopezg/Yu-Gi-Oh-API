<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api_controller;

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
});


Route::get('/', [api_controller::class,'inicio'])->name('inicio');
Route::get('/monster', [api_controller::class,'monster'])->name('monster');
Route::get('/monsterEF', [api_controller::class,'monsterEF'])->name('monsterEF');
Route::get('/monsterF', [api_controller::class,'monsterF'])->name('monsterF');
Route::get('/monsterS', [api_controller::class,'monsterS'])->name('monsterS');
Route::get('/monsterXYZ', [api_controller::class,'monsterXYZ'])->name('monsterXYZ');
Route::get('/monsterPENDULUM', [api_controller::class,'monsterPENDULUM'])->name('monsterPENDULUM');
Route::get('/monsterLINK', [api_controller::class,'monsterLINK'])->name('monsterLINK');



Route::get('/spell', [api_controller::class,'spell'])->name('spell');
Route::get('/spellNormal', [api_controller::class,'spellNormal'])->name('spellNormal');
Route::get('/spellEquip', [api_controller::class,'spellEquip'])->name('spellEquip');
Route::get('/spellRitual', [api_controller::class,'spellRitual'])->name('spellRitual');
Route::get('/spellContinuous', [api_controller::class,'spellContinuous'])->name('spellContinuous');
Route::get('/spellField', [api_controller::class,'spellField'])->name('spellField');
Route::get('/spellQuickPlay', [api_controller::class,'spellQuickPlay'])->name('spellQuickPlay');

Route::get('/trap', [api_controller::class,'trap'])->name('trap');
Route::get('/trapNormal', [api_controller::class,'trapNormal'])->name('trapNormal');
Route::get('/trapContinuous', [api_controller::class,'trapContinuous'])->name('trapContinuous');
Route::get('/trapCounter', [api_controller::class,'trapCounter'])->name('trapCounter');

Route::get('/basedatos', [api_controller::class,'basedatos'])->name('basedatos');
Route::get('/api', [api_controller::class,'api'])->name('api');
Route::get('detalle/{parametro}', [api_controller::class,'cartasApi'])->name('detalle');


Route::get('/bebidas', [api_controller::class,'bebidas'])->name('bebidas');


