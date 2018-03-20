<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">
		.active{
			text-decoration: none;
			color:green;
		}
	</style>
	<title>Mi sitio</title>
</head>
<body>
	<header>
		{{-- <h1>{{request()->is('/') ? 'Estas en el home':'No estas en el home'}}</h1> --}}
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		} ?>
	</header>
		<nav>
			{{-- <a class="{{request()->is('/') ? 'active':''}}" href="{{ route('home') }}">Inicio</a>
			<a class="{{request()->is('saludos/*') ? 'active':''}}" href="{{ route('saludos','Jorge')}}">Saludo</a>
			<a class="{{request()->is('contactame') ? 'active':''}}" href="{{ route('contactos')}}">Contacto</a> --}}
			<a class="{{activeMenu('/')}}" href="{{ route('home') }}">Inicio</a>
			<a class="{{activeMenu('saludos/*')}}" href="{{ route('saludos','Jorge')}}">Saludo</a>
			<a class="{{activeMenu('contactame')}}" href="{{ route('contactos')}}">Contacto</a>
		</nav>
	</header>
	@yield('contenido')
	<footer>Copyright {{ date('Y')}}</footer>
</body>
</html>