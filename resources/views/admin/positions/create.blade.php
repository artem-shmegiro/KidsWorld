@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Добавление должности @endslot
                @slot('parent') Главная @endslot
                @slot('active') Должности @endslot
            @endcomponent

            <form class="form-horizontal" action="{{ route('admin.position.store') }}" method="post">
                {{ csrf_field() }}

                @include('admin.positions.partials.form')
            </form>
        </div>
    </div>
@endsection