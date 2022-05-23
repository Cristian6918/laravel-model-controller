@extends('../layout')

@section('movies')
    @foreach ($movies as $movie)
        <div class="movie">
            <h2 class="movie-title">{{ $movie->title }}</h2>
            <p>Origina Title: {{ $movie->original_title }}</p>
            <p>Rating: {{ $movie->vote }}</p>
            <p>Release: {{ $movie->changeDateFormat($movie->date) }}</p>
        </div>
    @endforeach
@endsection
