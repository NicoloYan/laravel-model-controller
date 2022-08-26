@extends('layouts.app')

@section('main_content')

    <h1>Movies</h1>

    @foreach ($movies as $movie)
        <div>
            <h3>
                {{$movie->original_title}}
            </h3>
            <span>
                {{$movie->nationality}}
            </span>
            <br>
            <span>
                {{$movie->vote}}
            </span>
        </div>
    @endforeach
@endsection