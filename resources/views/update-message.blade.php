@extends('layouts.app')

@section('title-block') Обновление записи @endsection

@section('body')

    <form action="{{route('contact-form-update', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Адрес электронной почты</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="name" class="form-control" name="name" id="name" value="{{$data->name}}" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="textarea">Пример текстового поля</label>
            <textarea class="form-control" name="textarea" id="textarea" rows="3">{{$data->textarea}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection



