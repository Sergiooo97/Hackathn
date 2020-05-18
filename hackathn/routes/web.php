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

/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Rutas para pagina de información de alumno
Route::get('/infoAlumno', 'alumnoController@index')->name('infoAlumno');
Route::post('/infoAlumno', 'alumnoController@store')->name('infoAlumno.store');
route::get('/infoAlumno/{id}', 'alumnoController@show')
->where('id','[0-9]+')
->name('infoAlumno.show');
//Rutas para pagina de registro
Route::get('/registro', 'registroController@index')->name('registro');
Route::post('/Registro', 'registroController@store')->name('registro.store');
//Rutas para pagina de proyecto
Route::get('/proyecto', 'proyectoController@index')->name('proyecto');
Route::post('/proyecto','proyectoController@store')->name('proyecto.store');
//Rutas para pagina de ideas
Route::get('/ideas', 'ideasController@index')->name('ideas');
Route::post('/ideas','ideasController@store')->name('ideas.store');
//Rutas para pagina de ideas
Route::get('/chat', 'chatController@index')->name('chat');
Route::post('/chat','chatController@store')->name('chat.store');
//otras rutass
Route::get('/', 'inicioController@index')->name('inicio');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
