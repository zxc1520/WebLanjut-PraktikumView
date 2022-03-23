@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Halaman Posts</h1>
    @foreach ($posts as $post)
    <article>
        <h2><a href="/post/{{ $post->id }}">{{ $post->name }}</a></h2>
        <h5>{{ $post->excerpt }}</h5>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach
</div>

@endsection
