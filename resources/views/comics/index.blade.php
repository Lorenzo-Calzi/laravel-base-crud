@extends('layout.app')

<h1>Index</h1>

@foreach ($comics as $comic)   

    <a href="{{ route('comics.show', $comic->id)}}">{{$comic->name}}</a>
@endforeach


