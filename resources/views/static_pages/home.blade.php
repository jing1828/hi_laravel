@extends('layouts.default')

@section('title', '主頁')
@section('content')
    <div class="jumbotron">
        <h1>hello Laravel</h1>
        <p class="load">
            你现在所看到的是 <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 入门教程</a>
            的示例项目主页。
        </p>
        <p>一切，將從這裡開始。</p>
        <a href="{{ route('signup') }}" class="btn btn-info" role="button">現在註冊</a>
    </div>
@stop
