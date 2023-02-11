@extends('layouts.main')

@section('page-content')

@include('partials.hero')

<section class="comics py-4">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-md-3">
                <a href="{{route('show', $loop->index)}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </a>
                <h3>{{$comic['series']}}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection