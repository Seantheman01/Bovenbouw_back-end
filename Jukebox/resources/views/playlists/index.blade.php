@extends("layouts/template")

@section("content")
    <h1>Welkom in de playlist pagina!</h1>
    @foreach($playlists as $playlist)
        <p>{{$playlist->name}}</p>

        @foreach($playlist->songs as $song)
            - {{$song->name}}
            <br>
        @endforeach
        
    @endforeach
@endsection