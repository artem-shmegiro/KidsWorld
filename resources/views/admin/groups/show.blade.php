@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Информация о группе @endslot
                @slot('parent') Главная @endslot
                @slot('active') Текущая группа @endslot
            @endcomponent

            <div class="card text-center">
                <div class="card-header">
                    <h2>{{ $group->name }}</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Список детей группы</h5>
                    @forelse($group->kids as $kid)
                        <p class="card-text">{{ $kid->name }} <a href="{{ route('admin.kid.edit', $kid) }}"><i
                                        class="fa fa-edit"></i></a></p>
                    @empty
                        <h6 class="text-center">Детей нет</h6>
                    @endforelse

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <i
                                class="far fa-plus-square"></i> Добавить ребенка
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Добавить ребенка</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" action="{{ route('admin.kid.store') }}" method="post">
                                    <div class="modal-body">

                                        <input type="hidden" name="group_id" value="{{ $group->id ?? '' }}">
                                        {{ csrf_field() }}

                                        @include('admin.kids.partials.form')

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть
                                        </button>
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Воспитатели : {{ $group->educator1 }}, {{ $group->educator2 }}, Помощник воспитателя
                    : {{ $group->assistant }}
                </div>
            </div>
        </div>
    </div>
@endsection