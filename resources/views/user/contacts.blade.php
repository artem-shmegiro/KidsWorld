@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center shadow-lg p-2 mb-5 bg-white rounded">
            <div class="card-header">
                <h4>Контакты</h4>
            </div>
            <div class="card-body">
                @if(!empty($contacts[0]))
                    <table class="table table-bordered table-striped">
                        <tbody align="left">
                        <tr>
                            <th scope="row">Официальное наименование:</th>
                            <td>{{ $contacts[0]->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Тип учреждения:</th>
                            <td>{{ $contacts[0]->type }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Населенный пункт:</th>
                            <td>{{ $contacts[0]->place }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Адрес:</th>
                            <td>{{ $contacts[0]->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Телефон:</th>
                            <td>{{ $contacts[0]->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">E-mail:</th>
                            <td>{{ $contacts[0]->email }}</td>
                        </tr>
                        </tbody>
                    </table>
                @else
                    <h4>Данные отсутствуют</h4>
                @endif
            </div>
        </div>
    </div>
@endsection