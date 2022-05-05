@extends('layouts.base')

@section('content')
<h1>Страница приветствия</h1>
@foreach($newsList as $news)

<div>
    <a href="{{ route('news.show', ['id'=> $news['id']]) }}"><h3>{{ $news['title'] }}</h3></a>
    <img src="{{ $news['image'] }}" alt="pic">
    <p>{{ $news['description'] }}</p>
    <p>Date: {{ $news['created_at'] }}</p>
    <hr>
</div>

@endforeach
@endsection