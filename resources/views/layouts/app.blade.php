<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free post</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="bg-gradient-to-r from-cyan-500 to-blue-500">
  	<nav class="p-5 bg-gradient-to-r from-amber-500 to-lime-500 shadow md:flex md:justify-between mb-6">
  		
	  		<ul class="flex items-center">
	  			<li class="mx-4">
	  				<a href="/" class="text-xl hover:text-green-400 duration-500">Home</a>
	  			</li>
	  			<li class="mx-4">
	  				<a href="{{ route('dashboard') }}" class="text-xl hover:text-green-400 duration-500">Dashboard</a>
	  			</li>
	  			<li class="mx-4">
	  				<a href="{{ route('posts') }}" class="text-xl hover:text-green-400 duration-500">Publicaciones</a>
	  			</li>
	  		</ul>

	  		<ul class="flex items-center z-[-1] md:z-auto md:static absolute bg-orange-200 w-full left-0 md:w-auto">
	  			@auth
	  				<li class="mx-3">
	  					<a href="" class="text-xl hover:text-orange-400 duration-500">{{ auth()->user()->name }}</a>
	  				</li>
	  				<li class="mx-3">
	  					<form action="{{ route('logout') }}" method="post" class="p-3 inline">
	  						@csrf
	  						<button type="submit" class="text-xl hover:text-blue-600 duration-500 bg-orange-400 hover:bg-orange-600 rounded">Salir</button>

	  					</form>
	  				</li>
	  			@endauth
	  			@guest
	  				<li class="mx-3">
	  					<a href="{{ route('login') }}" class="text-xl hover:text-orange-400 duration-500">Ingresar</a>
	  				</li>
	  				<li class="mx-3">
	  					<a href="{{ route('register') }}" class="text-xl hover:text-orange-400 duration-500">Registro</a>
	  				</li>
	  			@endguest
	  		</ul>  		
  	</nav>
    @yield('content')
  </body>
</html>
