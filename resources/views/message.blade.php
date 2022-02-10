@extends('layouts.app')

@section('title-block') {{$data->name}} @endsection

@section('body')

                <h3>{{$data->name}}</h3>
                <p>{{$data->email}}</p>
                <p>{{$data->textarea}}</p>
                <a href="{{route('contact-update', $data->id)}}"><button class="btn btn-warning">Редактировать</button></a>
                <a href="{{route('contact-delete', $data->id)}}"><button class="btn btn-danger">Удалить</button></a>
@endsection
