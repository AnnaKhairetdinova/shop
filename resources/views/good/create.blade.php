@extends('layouts.app')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ html()->modelForm($good, 'POST', route('goods.store'))->open() }}
@include('good.form')
{{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}
