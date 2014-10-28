@extends('layouts.default')

@section('content')
  <h1>Hello, {{$user->username}}</h1>
  <p>{{$user->name}}</p>
  <p>{{$user->lastname}}</p>
@stop