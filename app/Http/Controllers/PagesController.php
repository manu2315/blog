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

    public function __construct(){
        $this->middleware('example',['except'=>['home']]);
    }

    public function home(){
    	return view('home');
        /*return response('Contenido de la respuesta',202)
        ->header('X-TOKEN','secret')
        ->header('X-TOKEN-2','secret-2')
        ->cookie('X-COOKIE','cookie');*/


    }

    /*public function contact(){
    	return view('contactos');
    }*/
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
    //public function mensajes(Request $request){
    	//return 'Procesando el mensaje' ;
    	//return $request->all();
    	/*if($request->has('nombre')){
    		return "Si tiene nombre".$request->input('nombre');
    	}
    	
    	return "No tiene nombre";*/
       
        /*return response()->json(['data'=>$data],202)
        ->header('TOKEN','secret');*/
       //return redirect('/');//redirecciona a home
        //return redirect()->route('saludos');
       /* return redirect()
                ->route('contactos')
                ->with('info','Tu mensaje a sido enviado');*/

 //   }
   /*public function mensajes(Request $request){
      
        $data = $request->all();//devuelve un array
        return back()->with('info','Tu mensaje ha sido enviado correctamente :)');

    }*/
}
