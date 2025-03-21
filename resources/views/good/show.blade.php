@extends('layouts.app')

@section('content')
    <h1>{{$good->name}}</h1>
    <div>{{$good->category}}</div>
    <div>{{$good->description}}</div>
    <div>{{$good->price}}</div>

    <?php
    if (auth()->user()->is_admin === 1) { ?>
    <a href="{{ route('goods.edit', $good) }}">Обновить информацию о товаре</a>
    <a href="{{ route('goods.destroy', $good) }}">Удалить</a>

    <?php } ?>
@endsection
