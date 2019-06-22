@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center shadow-lg p-2 mb-5 bg-white rounded">
            <div class="card-header">
                <h4>Группы</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @forelse($groups as $group)
                        <li class="list-group-item"><a href="{{ route('group', $group) }}">{{ $group->name }}</a></li>
                    @empty
                        <h2>Данные отсутствуют</h2>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection