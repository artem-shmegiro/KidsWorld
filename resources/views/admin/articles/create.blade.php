@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Создание новости @endslot
                @slot('parent') Главная @endslot
                @slot('active') Новости @endslot
            @endcomponent

            <form class="form-horizontal" action="{{ route('admin.article.store') }}" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('admin.articles.partials.form')
            </form>
        </div>
    </div>
@endsection