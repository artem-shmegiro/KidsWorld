@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded">
            @component('admin.components.breadcrumb')
                @slot('title') Список комментариев @endslot
                @slot('parent') Главная @endslot
                @slot('active') Комментарии @endslot
            @endcomponent


            <br><br>
            <table class="table table-striped">
                <thead>
                <th>Наименование</th>
                <th class="text-right">Действие</th>
                </thead>
                <tbody>
                @forelse ($comments as $comment)
                    <tr>
                        <td>{{$comment->user->name}}</td>
                        <td class="float-right">
                            <form onsubmit="if (confirm('Удалить?')) { return true } else { return false }"
                                  action="{{ route('admin.comment.destroy', $comment) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-light" href="{{ route('admin.comment.edit', $comment) }}"><i
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
                            {{ $comments->links() }}
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection