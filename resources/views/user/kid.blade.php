@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-lg p-2 mb-5 bg-white rounded">
            <div class="card-header">
                <h5>{{ $kid->group->name ?? '' }}</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $kid->name }}</h5>
                <p class="card-text">Отметка о завтраке: {{ $kid->breakfast ?? 'Информации нет' }}</p>
                <p class="card-text">Отметка об обеде: {{ $kid->lunch ?? 'Информации нет' }}</p>
                <p class="card-text">Отметка о полднике: {{ $kid->afternoon ?? 'Информации нет' }}</p>
                <p class="card-text">Отметка о тихом часе: {{ $kid->sleep ?? 'Информации нет' }}</p>
                <p class="card-text">Домашнее задание: {{ $kid->homework ?? 'Информации нет' }}</p>
                <p class="card-text">Другие отметки: {{ $kid->other ?? 'Информации нет' }}</p>
            </div>
        </div>
    </div>
@endsection