@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($articles as $article)
            <div class="card mb-3 shadow-lg p-2 mb-5 bg-white rounded">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('/storage/' . $article->image) }}" class="card-img" alt="image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <?php $text = strip_tags($article->description);
                            $text = substr($text, 0, 600);
                            $text = rtrim($text, "!,.-");
                            $text = substr($text, 0, strrpos($text, ' ')); ?>
                            <p class="card-text" align="justify">
                                {{ $text . '...' }}
                                <a href="{{ route('article', $article) }}">читать далее</a>
                            </p>
                            <p class="card-text float-right">
                                <small class="text-muted">{{ date("d F Y, H:i", strtotime($article->updated_at)) }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h2>Данные отсутствуют</h2>
        @endforelse
    </div>
@endsection