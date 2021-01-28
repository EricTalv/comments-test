@extends('layouts.app')

@section('content')
    <div style="width: 50%; margin: auto;">
        <h1>{{ $article->title }}</h1>
        <p><small>{{ $article->excerpt }}</small></p>
        <p>{{ $article->body }}</p>
    </div>

    <hr>

    @comments(['model' => $article])


@endsection
