@extends('layouts.app')

@section('title-block') myShow @endsection

@section('title')<h1>{{$surname}}</h1> @endsection

@section('body'){{--Первая переменная: {{ $name}}--}}
    @foreach ($name as $elem)
        <ul>
            @foreach ($elem as $k => $el)
                <li>{{$k}} = {{ $el }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст.</p>
@endsection
{{--route('test')--}}
