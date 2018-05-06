@extends('layout')


@section('contenido')
	<h1>Editar mensaje</h1>
	<form method="POST" action="{{ route('mensajes.update',$message->id) }}">
		{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
	{{-- 	{{ method_field('PUT') }}{{csrf_field()}} --}}
		<p>
			<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{$message->nombre}}">
			{!! $errors->first('nombre','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<p>
			<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{$message->email}}">
			{!! $errors->first('email','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<p>
			<label for="mensaje">
			Mensaje
			<textarea class="form-control" name="mensaje">{{$message->mensaje}}</textarea> 
			{!! $errors->first('mensaje','<span class=error>:messages</span>')!!}
		</label>
		</p>
		<input class="btn btn-primary" type="submit" value="Enviar">
	</form>

@stop