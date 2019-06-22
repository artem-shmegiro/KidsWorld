@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Изменение информации о ребенке @endslot
                @slot('parent') Главная @endslot
                @slot('active') Текущий ребенок @endslot
            @endcomponent
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="mx-auto">{{ $kid->group->name ?? '' }}</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.kid.update', $kid) }}" method="post">
                        <input type="hidden" name="_method" value="put">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        @include('admin.kids.partials.form')
                        <input type="submit" class="btn btn-success btn-block" value="Сохранить">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection