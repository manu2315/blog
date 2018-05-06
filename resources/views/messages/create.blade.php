@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
@if(session()->has('info'))
	<h3>{{ session('info') }}</h3>
@else
<form method="POST" action="{{ route('mensajes.store') }}">
	{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
	{!! csrf_field() !!}
	<p>
		<label for="nombre">
		Nombre
		<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
		{!! $errors->first('nombre','<span class=error>:messages</span>')!!}
	</label>
	</p>
	<p>
		<label for="email">
		Email
		<input class="form-control" type="email" name="email" value="{{old('email')}}">
		{!! $errors->first('email','<span class=error>:messages</span>')!!}
	</label>
	</p>
	<p>
		<label for="mensaje">
		Mensaje
		<textarea class="form-control" name="mensaje">{{old('mensaje')}}</textarea> 
		{!! $errors->first('mensaje','<span class=error>:messages</span>')!!}
	</label>
	</p>
	<input class="btn btn-primary" type="submit" value="Enviar">
</form>
@endif
@stop