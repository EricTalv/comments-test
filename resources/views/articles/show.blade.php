@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>{{ $article->title }}</h1>
        <p><small>{{ $article->excerpt }}</small></p>
        <p>{{ $article->body }}</p>
    </div>

    <hr>


@endsection
