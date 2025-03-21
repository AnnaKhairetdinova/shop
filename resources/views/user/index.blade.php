@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr class="tag_header">
            <td>ФИО</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
@endsection
