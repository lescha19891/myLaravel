@extends('layouts.app')

@section('title-block') Все данные @endsection

@section('body')
    <div class="row">
        @foreach($data as $el)
            <div class="alert alert-info col-4">
                <h3>{{$el->name}}</h3>
               <p>{{$el->email}}</p>
                <a href="{{route('one-data', $el->id)}}"><button class="btn btn-warning">Детально</button> </a>
            </div>
        @endforeach
    </div>
@endsection
