<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Mi sitio</title>
</head>
<body>
	<header>
		{{-- <h1>{{request()->is('/') ? 'Estas en el home':'No estas en el home'}}</h1> --}}
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		} ?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="{{ route('home') }}">BLOG</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    	<li class="{{activeMenu('/')}}">
		        	<a class="nav-link" href="{{ route('home') }}">Inicio<span class="sr-only">(current)</span></a>
		        </li>
		        <li class="{{activeMenu('saludos*')}}">
		        	<a class="nav-link" href="{{ route('saludos','Manu')}}">Saludo<span class="sr-only">(current)</span></a>
		        </li>
		        <li class="{{activeMenu('mensajes/create')}}">
		        	<a class="nav-link" href="{{ route('mensajes.create')}}">Contactos<span class="sr-only">(current)</span></a>
		        </li>
		        @if(auth()->check())
		        <li class="{{activeMenu('mensajes*')}}">
		        	<a class="nav-link" href="{{ route('mensajes.index')}}">Mensajes<span class="sr-only">(current)</span></a>
		        </li>
		        @endif
					{{-- @if(auth()->check())
					<a class="{{activeMenu('mensajes')}}" href="{{ route('mensajes.index')}}">Mensajes</a>
				<a href="/logout">Cerrar sesión de {{ auth()->user()->name }}</a> 
				@endif--}}
				{{-- @if (auth()->guest())
					<a class="{{ activeMenu('login') }}" href="/login">Login</a>
				@endif --}}

		      {{-- <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li> --}}
		     
		    </ul>
		     <ul class="navbar-nav navbar-right">
		     @if (auth()->guest())
		      <li class="{{ activeMenu('login') }}"  >
		        <a class="nav-link" href="/login">Login</a>
		      </li>
		     @else
		      <li >
		      	<a class="nav-link" href="/logout">Cerrar sesión de {{ auth()->user()->name }}</a>
		      </li>
		     @endif
		     </ul>
		 
		  </div>
		</nav>
	</header>
	<div class="container">
		@yield('contenido')
		<footer>Copyright {{ date('Y')}}</footer>
	</div>
	
</body>
</html>