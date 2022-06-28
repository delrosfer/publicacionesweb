<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free post</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="bg-cyan-200">
  	<nav class="p-5 bg-white shadow md:flex md:justify-between mb-6">
  		
	  		<ul class="flex items-center">
	  			<li class="mx-4">
	  				<a href="" class="text-xl hover:text-cyan-400 duration-500">Home</a>
	  			</li>
	  			<li class="mx-4">
	  				<a href="" class="text-xl hover:text-cyan-400 duration-500">Dashboard</a>
	  			</li>
	  			<li class="mx-4">
	  				<a href="" class="text-xl hover:text-cyan-400 duration-500">Publicaciones</a>
	  			</li>
	  		</ul>

	  		<ul class="flex items-center">
	  			<li class="mx-3">
	  				<a href="" class="text-xl hover:text-orange-400 duration-500">Silverio del Rosario</a>
	  			</li>
	  			<li class="mx-3">
	  				<a href="" class="text-xl hover:text-orange-400 duration-500">Login</a>
	  			</li>
	  			<li class="mx-3">
	  				<a href="{{ route('register') }}" class="text-xl hover:text-orange-400 duration-500">Registro</a>
	  			</li>
	  			<li class="mx-3">
	  				<a href="" class="text-xl hover:text-orange-400 duration-500">Logout</a>
	  			</li>
	  		</ul>
  		
  	</nav>
    @yield('content')
  </body>
</html>
