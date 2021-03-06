@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-8/12 bg-gray-200 p-6 rounded-lg">

			@auth
				<form action="{{ route('posts') }}" method="post" class="mb-4">
					@csrf
					<div class="mb-4">
						<label for="body" class="sr-only">Cuerpo</label>
						<textarea name="body" id="body" cols="30" rows="4" class="bg-orange-200 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Publica algo a tu red de amigos y conocidos (solo texto)"></textarea>

						@error('body')
							<div class="text-red-500 mt-2 text-sm">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div>
						<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Publicar</button>
					</div>
				</form>
			@endauth

			@if ($posts ->count())
				@foreach($posts as $post)
					<x-post :post="$post" />
				@endforeach

				{{ $posts->links() }}
			@else
				<p>No hay publicaciones</p>
			@endif
		</div>
	</div>
@endsection