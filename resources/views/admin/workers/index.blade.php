@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Список сотрудников @endslot
                @slot('parent') Главная @endslot
                @slot('active') Сотрудники @endslot
            @endcomponent


            <a href="{{ route('admin.worker.create') }}" class="btn btn-primary float-right"><i
                        class="far fa-plus-square"></i> Добавить сотрудника</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                <th>Наименование</th>
                <th class="text-right">Действие</th>
                </thead>
                <tbody>
                @forelse ($workers as $worker)
                    <tr>
                        <td>{{$worker->name}} {{$worker->midname}} {{$worker->surname}}</td>
                        <td class="float-right">
                            <form onsubmit="if (confirm('Удалить?')) { return true } else { return false }"
                                  action="{{ route('admin.worker.destroy', $worker) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-light" href="{{ route('admin.worker.edit', $worker) }}"><i
                                                class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn btn-light"><i class="fas fa-trash"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination float-right">
                            {{ $workers->links() }}
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection