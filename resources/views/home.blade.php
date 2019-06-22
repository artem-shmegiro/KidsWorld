@extends('layouts.app')

@section('content')
    <div class="container">

                <!--Card-->
            <div class="card shadow-lg p-2 mb-5">
                <canvas class="header-bg" id="header-blur"></canvas>
                <div class="avatar mx-auto white">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" alt="Avatar" class="md-avatar rounded-circle size-5">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold mb-4">{{ Auth::user()->name }}</h4>
                        <hr>
                        <!--Quotation-->
                        <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Зарегистрированная электронная почта: {{ Auth::user()->email }}</p>
                </div>
            </div>
    
    </div>
@endsection
