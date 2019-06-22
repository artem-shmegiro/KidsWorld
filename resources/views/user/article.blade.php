@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 shadow p-2 mb-2 bg-white rounded">
            <div class="card-header">
                <h3 class="card-title">{{ $article->title }}</h3>
            </div>
            <div class="card-body">
                <div class="col-lg-4 float-left indent">
                    <a data-toggle="modal" data-target="#exampleModalCenter"><img
                                src="{{ asset('/storage/' . $article->image) }}" class="card-img-top" alt="Image"></a>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Изображение</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card shadow p-2 mb-2 bg-white rounded">
                                        <img src="{{ asset('/storage/' . $article->image) }}"
                                             alt="Image">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <p align="justify">{{ $article->description }}</p>

            </div>
            <div class="card-footer">
                <p class="card-text float-right">
                    <small class="text-muted">{{ date("d F Y, H:i", strtotime($article->updated_at)) }}</small>
                </p>
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow">
            <h5 class="border-bottom border-gray pb-2 mb-0">Комментарии</h5>
            @forelse($article->comments as $comment)
                <div class="media text-muted pt-2">

                    <img src="../image/face.jpg" alt="Avatar"
                         class="mr-2 md-avatar rounded-circle">

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">{{"@" . $comment->user->name }}</strong>
                       {{ $comment->description }}
                    </p>
                </div>
            @empty
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">Пока комментариев нет</strong>
                    </p>
                </div>
            @endforelse
        </div>
        <div class="card my-2 p-3 bg-white rounded shadow">
            @guest
                <h5 class="border-bottom border-gray pb-2 mb-0">Вы должны залогиниться чтобы оставить комментарий.</h5>
            @else
                <div class="text-muted pt-3">
                    <form class="form-horizontal" action="{{ route('comment.store') }}" method="post">
                        <input type="hidden" name="article_id" value="{{ $article->id ?? '' }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" id="description" name="description" rows="3"
                                      placeholder="Написать комментарий..." required></textarea>
                        </div>

                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Отправить <i
                                        class="fas fa-paper-plane fa-lg fa-comment"></i></button>
                        </div>
                    </form>
                </div>
            @endguest
        </div>
    </div>
@endsection