@extends('layouts.main')

@section('main-content')

<div class="container">
    <h2>{{ $posts->name }}</h2>
    <p>{{ $posts->body }}</p>
</div>

@endsection
