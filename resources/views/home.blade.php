@extends('layouts.app')

@section('pageTitle')

Home

@endsection

@section('content')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 card-group">
            <div class="card mb-5">
                <div class="card-body">
                    <h3>{{ $movie->title }}</h3>
                    <h5>{{ $movie->original_title }}</h5>
                    <h5>{{ $movie->vote }}</h5>
                    <h5>Uscito il: {{ $movie->date }}</h5>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection