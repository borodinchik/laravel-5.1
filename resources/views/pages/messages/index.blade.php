@extends('index')

@section('content')

    @include('_cannon._form')
    <hr />
    <div class="text-right"><b>Всего сообщений:</b><i class="badge">{{ $count }}</i></div><br />
    @include('pages.messages._items')
@stop