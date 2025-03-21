@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ html()->modelForm($good, 'PATCH', route('goods.update', $good))->open() }}
@include('good.form')
{{ html()->submit('Обновить')->class('btn btn-primary') }}
{{ html()->closeModelForm() }}
