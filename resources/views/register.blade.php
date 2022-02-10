@extends('layouts.app')

@section('title-block') Регистрация @endsection

@section('body')

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="name" class="form-control" name="name" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-success">Регистрация</button>
    </form>
@endsection
