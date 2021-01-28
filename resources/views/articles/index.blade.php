@extends('layouts.app')


@section('content')'
<div style="display:flex; flex-flow: column; width: 100%; align-items: center">
    @foreach($articles as $article)
        <div class="card w-50 my-2">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text"></p>
                <a href="{{ route('articles.show', ['id' => $article->id]) }}" class="btn btn-primary">Go To Article</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
