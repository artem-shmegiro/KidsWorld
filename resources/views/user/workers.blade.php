@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Администрация</h3>
        <div class="row text-center">
            @forelse($workers as $worker)
                @if($worker->group=='Администрация')
                    <div class="col-lg-3">
                            <div class="card">
                                <img src="{{ asset('/storage/' . $worker->image) }}" class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <h6 class="card-title">{{$worker->name}} {{$worker->midname}} {{$worker->surname}}</h6>
                                    <p class="card-text">
                                        <small class="text-muted">{{ $worker->post->title }}</small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">{{ $worker->post_second->title ?? "" }}</small>
                                    </p>
                                </div>
                            </div>
                    </div>
                @endif
            @empty
                <h2>Данные сотрудники отсутствуют</h2>
            @endforelse
        </div>
        <br>
        <h3>Учителя</h3>
        <div class="row">
            @forelse($workers as $worker)
                @if($worker->group=='Учителя')
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="{{ asset('/storage/' . $worker->image) }}" class="card-img-top"
                                 alt="image">
                            <div class="card-body">
                                <h6 class="card-title">{{$worker->name}} {{$worker->midname}} {{$worker->surname}}</h6>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post->title }}</small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post_second->title ?? "" }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <h2>Данные сотрудники отсутствуют</h2>
            @endforelse
        </div>
        <br>
        <h3>Воспитатели</h3>
        <div class="row">
            @forelse($workers as $worker)
                @if($worker->group=='Воспитатели')
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="{{ asset('/storage/' . $worker->image) }}" class="card-img-top"
                                 alt="image">
                            <div class="card-body">
                                <h6 class="card-title">{{$worker->name}} {{$worker->midname}} {{$worker->surname}}</h6>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post->title }}</small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post_second->title ?? "" }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <h2>Данные сотрудники отсутствуют</h2>
            @endforelse
        </div>
        <br>
        <h3>Повара</h3>
        <div class="row">
            @forelse($workers as $worker)
                @if($worker->group=='Повара')
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="{{ asset('/storage/' . $worker->image) }}" class="card-img-top"
                                 alt="image">
                            <div class="card-body">
                                <h6 class="card-title">{{$worker->name}} {{$worker->midname}} {{$worker->surname}}</h6>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post->title }}</small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $worker->post_second->title ?? "" }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <h2>Данные сотрудники отсутствуют</h2>
            @endforelse
        </div>
    </div>
@endsection