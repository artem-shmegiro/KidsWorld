@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Список групп @endslot
                @slot('parent') Главная @endslot
                @slot('active') Группы @endslot
            @endcomponent


            <a href="{{ route('admin.group.create') }}" class="btn btn-primary float-right"><i
                        class="far fa-plus-square"></i> Добавить группу</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                <th>Наименование</th>
                <th class="text-right">Действие</th>
                </thead>
                <tbody>
                @forelse ($groups as $group)
                    <tr>
                        <td><a href="{{ route('admin.group.show', $group) }}">{{$group->name}}</a></td>
                        <td class="float-right">
                            <form onsubmit="if (confirm('Удалить?')) { return true } else { return false }"
                                  action="{{ route('admin.group.destroy', $group) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-light" href="{{ route('admin.group.edit', $group) }}"><i
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
                            {{ $groups->links() }}
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection