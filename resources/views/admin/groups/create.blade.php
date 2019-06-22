@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Добавление группы @endslot
                @slot('parent') Главная @endslot
                @slot('active') Группы @endslot
            @endcomponent

            <form class="form-horizontal" action="{{ route('admin.group.store') }}" method="post">
                {{ csrf_field() }}

                @include('admin.groups.partials.form')
            </form>
        </div>
    </div>
@endsection