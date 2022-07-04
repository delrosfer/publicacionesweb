@component('mail::message')
# Tu publicación recibió un "Me gusta"

Felicidades, el usuario {{ $liker->name }} realizó un "Me gusta" en una de tus publicaciones.

@component('mail::button', ['url' => route('posts.show', $post)])
Consultar Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
