@extends('master')

@section('content')
    <h1>Justin Bieber Official Fan club</h1>

    @foreach($songs as $index => $song)
    <li><a href="songs/{{$index}}">{{ $song }}</a></li>
    @endforeach
@stop