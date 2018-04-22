<?php

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

/*Route::get('/', ['as'=>'home',function () {
    //return view('welcome');
    //return "Hola desde la pagina de inicio";
    return view('home');
}]);*/

/*Route::get('/', ['as'=>'home','uses'=>'PagesController@home'])->middleware('example');*/
Route::get('/', ['as'=>'home','uses'=>'PagesController@home']);

/*Route::get('contactame', ['as'=>'contactos',function () {
    //return view('welcome');
   //return "Hola desde la pagina de contacto";
	return view('contactos');
}]);*/

Route::get('contactame', ['as'=>'contactos','uses'=>'PagesController@contact']);

/*Route::get('saludos/{nombre?}', ['as'=>'saludos',function ($nombre="Invitado") {
    //return view('welcome');
    //return "Saludos $nombre";
   // return view('saludo',['nombre'=>$nombre]);
	//return view('saludo')->with(['nombre'=>$nombre]);
	$html = "<h2>Contenido html</h2>";
	$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";
	//return view('saludo',compact('nombre'));
	//return view('saludo',compact('nombre','html'));
	//$consolas = ["PS4",
//"Xbox One",
//"Switch"];

	return view('saludo',compact('nombre','html','script','consolas'));
}])->where('nombre',"[A-Za-z]+");*/


Route::get('saludos/{nombre?}', ['as'=>'saludos','uses'=>'PagesController@saludo'])->where('nombre',"[A-Za-z]+");

Route::post('contacto','PagesController@mensajes');


Route::get('mensajes',['as'=>'messages.index','uses'=>'MessagesController@index']);

Route::get('mensajes/create',['as'=>'messages.create','uses'=>'MessagesController@create']);

Route::post('mensajes',['as'=>'messages.store','uses'=>'MessagesController@store']);

Route::get('mensajes/{id}',['as'=>'messages.show','uses'=>'MessagesController@show']);
Route::get('mensajes/{id}/edit',['as'=>'messages.edit','uses'=>'MessagesController@edit']);
Route::put('mensajes/{id}',['as'=>'messages.update','uses'=>'MessagesController@update']);
Route::delete('mensajes/{id}',['as'=>'messages.destroy','uses'=>'MessagesController@destroy']);