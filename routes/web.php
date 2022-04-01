<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

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
    return view('Template.index');
})->name('index');

route::get('/01generic', function () {
    return view('Template.01generic');
})->name('01generic');

route::get('/02generic', function () {
    return view('Template.02generic');
})->name('02generic');

route::get('/03generic', function () {
    return view('Template.03generic');
})->name('03generic');

route::get('/04generic', function () {
    return view('Template.04generic');
})->name('04generic');

route::get('/05generic', function () {
    return view('Template.05generic');
})->name('05generic');

route::get('/06generic', function () {
    return view('Template.06generic');
})->name('06generic');

route::get('/07generic', function () {
    return view('Template.07generic');
})->name('07generic');

route::get('/08generic', function () {
    return view('Template.08generic');
})->name('08generic');

route::get('/09generic', function () {
    return view('Template.09generic');
})->name('09generic');

route::get('/10generic', function () {
    return view('Template.10generic');
})->name('10generic');

route::get('/11generic', function () {
    return view('Template.11generic');
})->name('11generic');

route::get('/12generic', function () {
    return view('Template.12generic');
})->name('12generic');

route::get('/13generic', function () {
    return view('Template.13generic');
})->name('13generic');

route::get('/14generic', function () {
    return view('Template.14generic');
})->name('14generic');

route::get('/15generic', function () {
    return view('Template.15generic');
})->name('15generic');

route::get('/16generic', function () {
    return view('Template.16generic');
})->name('16generic');

route::get('/17generic', function () {
    return view('Template.17generic');
})->name('17generic');

route::get('/18generic', function () {
    return view('Template.18generic');
})->name('18generic');

Route::get('/',[Apicontroller::class, 'inicio'])->name('inicio');

Route::get('/personaje/{id}',[Apicontroller::class, 'detallePersonaje'])->name('detalle.personaje');
