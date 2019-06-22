@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-3">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 bg-white shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary mx-auto">Количество новостей</strong>
                        <h3 class="mb-0 mx-auto">{{ $count_articles }}</h3>
                        <div class="mb-1 text-muted">{{ date('F d', time()) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 bg-white shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success mx-auto">Количество сотрудников</strong>
                        <h3 class="mb-0 mx-auto">{{ $count_workers }}</h3>
                        <div class="mb-1 text-muted">{{ date('F d', time()) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 bg-white shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger mx-auto">Посетителей за все время</strong>
                        <h3 class="mb-0 mx-auto">14</h3>
                        <div class="mb-1 text-muted">{{ date('F d', time()) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 bg-white shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning mx-auto">Посетителей сегодня</strong>
                        <h3 class="mb-0 mx-auto">2</h3>
                        <div class="mb-1 text-muted">{{ date('F d', time()) }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6 ">
                <div class="shadow p-2 mb-5 bg-white rounded">
                    <a class="btn btn-block btn-outline-primary shadow-sm mb-2" href="{{ route('admin.article.create') }}">Создать
                        новость</a>
                    @foreach($articles as $article)
                        <div class="list-group text-center shadow-sm p-2 mb-2 bg-white rounded">
                            <a class="list-group-item list-group-item-info"
                               href="{{ route('admin.article.edit', $article) }}">
                                <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                                <p class="list-group-item-text">
                                    Количество комментариев: {{ $article->comments()->count() }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-6">
                <div class="shadow p-2 mb-5 bg-white rounded">
                    <a class="btn btn-block btn-outline-primary shadow-sm mb-2" href="{{ route('admin.comment.index') }}">Комментарии</a>
                    @foreach($comments as $comment)
                        <div class="list-group text-center shadow-sm p-2 mb-2 bg-white rounded">
                            <a class="list-group-item list-group-item-info"
                               href="{{ route('admin.comment.edit', $comment) }}">
                                <h4 class="list-group-item-heading">{{ $comment->description }}</h4>
                                <p class="list-group-item-text">
                                    Пользователь: {{ $comment->user->name }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection