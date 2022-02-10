@extends('layouts.app')

@section('title-block') Регистрация @endsection

@section('body')

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="name" class="form-control" name="name" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-success">Войти</button>
    </form>
@endsection
