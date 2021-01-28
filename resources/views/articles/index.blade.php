@extends('layouts.app')


@section('content')
    @foreach($articles as $article)
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text"></p>
                <a href="{{ route('article.show', ['id' => $article->id]) }}" class="btn btn-primary">Go To Article</a>
            </div>
        </div>
    @endsection
@endsection
