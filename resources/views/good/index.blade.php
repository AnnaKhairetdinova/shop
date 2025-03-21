@extends('layouts.app')

@section('content')
    @if (count($goods) === 0)
        <div>
            Товаров нет
        </div>
    @else
        <table class="table table-hover">
            <thead>
            <tr class="tag_header">
                <td>Товар</td>
                <td>Цена</td>
                <td>Описание</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($goods as $good)
                <tr>
                    <td><a href="{{ route('goods.show', $good->id) }}">{{$good->name}}</a></td>
                    <td>
                    <a href="{{ route('goods.show', $good) }}">{{$good->name}}</a>
                    </td>

                    <td>{{$good->price}}</td>

                    <td>{{$good->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <div>
        <a class="btn btn-primary" href="{{ route('goods.create') }}" role="button" >Создать товар</a>
    </div>

@endsection
