@extends('layouts.master')
@section('content')
    @foreach ($posts as $post)
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['text'] }}</p>
    @endforeach
@endsection
