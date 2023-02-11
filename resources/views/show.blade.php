@extends('layouts.main')

@section('page-content')

@include('partials.hero')

<section class="comics py-4">
    <div class="container">
        <h1>{{$comic['series']}}</h1>
    </div>
</section>

@endsection