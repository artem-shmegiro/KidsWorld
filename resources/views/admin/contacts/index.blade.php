@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Контакты @endslot
                @slot('parent') Главная @endslot
                @slot('active') Контакты @endslot
            @endcomponent
            <div class="card text-center">
                <div class="card-header">
                    <h4>Контактная информация</h4>
                </div>
                <div class="card-body">
                    @if($count_contact > 0)
                        <form class="form-horizontal"
                              action="{{ route('admin.contact.update', $contact=$contacts[0]) }}"
                              method="post">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}

                            @include('admin.contacts.partials.form')
                        </form>
                    @else
                        <form class="form-horizontal" action="{{ route('admin.contact.store') }}" method="post">
                            {{ csrf_field() }}

                            @include('admin.contacts.partials.form')
                        </form>
                    @endif
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
    </div>
@endsection