@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-4/12 bg-white p-6 rounded-lg">
			<form action="{{ route('register') }}" method="post">
				@csrf
				<div class="mb-4">
					<label for="name" class="sr-only">Nombre</label>
					<input type="text" name="name" id="name" placeholder="Ingresa tu nombre" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
				</div>

				<div class="mb-4">
					<label for="username" class="sr-only">Usuario</label>
					<input type="text" name="username" id="username" placeholder="Ingresa tu usuario" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
				</div>

				<div class="mb-4">
					<label for="email" class="sr-only">Correo electrónico</label>
					<input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
				</div>

				<div class="mb-4">
					<label for="password" class="sr-only">Contraseña</label>
					<input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
				</div>

				<div class="mb-4">
					<label for="password_confirmation" class="sr-only">Contraseña</label>
					<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
				</div>

				<div>
					<button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registrar</button>
				</div>
			</form>
		</div>
	</div>
@endsection