@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
@if(session()->has('info'))
	<h3>{{ session('info') }}</h3>
@else
<form method="POST" action="contacto">
	{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
	{!! csrf_field() !!}
	<p>
		<label for="nombre">
		Nombre
		<input type="text" name="nombre">
	</label>
	</p>
	<p>
		<label for="email">
		Email
		<input type="email" name="email">
	</label>
	</p>
	<p>
		<label for="mensaje">
		Mensaje
		<textarea name="mensaje"></textarea> 
	</label>
	</p>
	<input type="submit" value="Enviar">
</form>
@endif
@stop