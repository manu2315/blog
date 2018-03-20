<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//protected $request;

	/*public function __construct(Request $request){
		$this->request = $request;
	}
*/


    public function home(){
    	return view('home');
    }

    public function contact(){
    	return view('contactos');
    }
    public function saludo($nombre="Invitado"){
    	 
	$html = "<h2>Contenido html</h2>";
	$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";
	
	$consolas = [
		"PS4",
		"Xbox One",
		"Switch"];

	return view('saludo',compact('nombre','html','script','consolas'));
    }
   /* public function mensajes(){
    	//return 'Procesando el mensaje' ;
    	return $this->request->all();
    }*/
    public function mensajes(Request $request){
    	//return 'Procesando el mensaje' ;
    	//return $request->all();
    	if($request->has('nombre')){
    		return "Si tiene nombre".$request->input('nombre');
    	}
    	
    	return "No tiene nombre";

    	
    }
}
