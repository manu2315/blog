@extends('layout')


@section('contenido')
	<h1>Editar mensaje</h1>
	<form method="POST" action="{{ route('messages.store') }}">
		{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
		{!! csrf_field() !!}
		<p>
			<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{$message->nombre}}">
			{!! $errors->first('nombre','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<p>
			<label for="email">
			Email
			<input type="email" name="email" value="{{$message->email}}">
			{!! $errors->first('email','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<p>
			<label for="mensaje">
			Mensaje
			<textarea name="mensaje">{{$message->mensaje}}</textarea> 
			{!! $errors->first('mensaje','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<input type="submit" value="Enviar">
	</form>

@stop