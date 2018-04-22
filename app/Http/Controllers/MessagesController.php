<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$messages=DB::table('messages')->get();
        $messages = Message::all();
        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //carpetaNombre.archivoNombre
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar msj
        //redireccionar
        //return "Guardar y redireccionar";
        //return $request->all();
        //return $request->input("nombre");
        
        /*DB::table('messages')->insert([
            "nombre"=>$request->input('nombre'),
            "email"=>$request->input('email'),
            "mensaje"=>$request->input('mensaje'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()

        ]);*/

        /*$message = new Message;
        $message->nombre=$request->input('nombre');
        $message->email=$request->input('email');
        $message->mensaje=$request->input('mensaje');
        $message->save();*/
        //dd($request->all());
        //Model::unguard();

        Message::create($request->all());
       //dd($request->all());
        //return "Hecho";
        //return redirect('messages.index');
        //No venia en el tutorial
        //return redirect('mensajes');//funciona
        return redirect()->route('mensajes.index');
        //return view ('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return "Este es el mensaje con id ".$id;
       $message= DB::table('messages')->where('id',$id)->first();
        return view('messages.show',compact('message'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $message= DB::table('messages')->where('id',$id)->first();
         return view('messages.edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::table('messages')->where('id',$id)->update([
            "nombre"=>$request->input('nombre'),
            "email"=>$request->input('email'),
            "mensaje"=>$request->input('mensaje'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('messages')->where('id',$id)->delete();   
        return redirect()->route('mensajes.index');
    }
}
