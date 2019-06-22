@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center shadow-lg p-2 mb-5 bg-white rounded">
            <div class="card-header">
                <h4>{{ $group->name }}</h4>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <h5>Воспитатели:</h5>
                        <h6 class="card-title">{{ $group->mentor1->surname }} {{ $group->mentor1->name }} {{ $group->mentor1->midname }}</h6>
                        @if(!empty($group->mentor2))
                        <h6 class="card-title">{{ $group->mentor2->surname . " " . $group->mentor2->name . " " . $group->mentor2->midname }}</h6>
                        @endif
                        @if(!empty($group->assmentor))
                        <h5>Помощник воспитателя</h5>
                        <h6 class="card-title">{{ $group->assmentor->surname . " " . $group->assmentor->name . " " . $group->assmentor1->midname ?? "" }}</h6>
                        @endif
                        <h5>Девиз:</h5>
                        <div class="card col-lg-8 mx-auto">
                            <br>
                            <pre><h6><em>{{ $group->slogan }}</em></h6></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Список детей</h5>
                        <?php $i=1 ?>
                        @foreach($group->kids as $kid)
                            <p class="card-text"><a
                                        href="{{ route('kid', $kid) }}">{{ $i++ }}. {{ $kid->name }}</a>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                Kindergarten
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow">
            <h5 class="border-bottom border-gray pb-2 mb-0">Комментарии</h5>
            @forelse($group->comments as $comment)
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                         role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"></rect>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>
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
                        <input type="hidden" name="group_id" value="{{ $group->id ?? '' }}">
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