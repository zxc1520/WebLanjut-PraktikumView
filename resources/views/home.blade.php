@extends('layouts.main')

@section('main-content')
<section class="showcase">
    <div class="intro">
        <div class="intro-text-layout">
            <h2 class="heading">
                Hello Everyone ! <br />
                I'm {{ $name }}, I'm an <span>informatics</span> student.
            </h2>
            <p>Hey and welocome to my personal website page. you can explore my website page just one click below. </p>
        </div>
        <div class="intro-btn-layout">
            <a href="{{ url('about') }}" class="btn-prime">Futher Information</a>
        </div>
    </div>
</section>
<img src="{{asset('img/wave.svg')}}" alt="" srcset="">
@endsection
