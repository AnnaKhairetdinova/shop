@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{  html()->label('Название товара', 'name') }}
{{  html()->input('text', 'name') }}
{{  html()->label('Категория товаров', 'category') }}
<select class="form-select" id="category" name="category">
    @foreach ($categoryList as $category)
        <option value="{{ $category->name }}">{{ $category->name }}</option>
    @endforeach
</select>

{{  html()->label('Описание товара', 'description') }}
{{  html()->input('text', 'description') }}
{{  html()->label('Цена', 'price') }}
{{  html()->input('text', 'price') }}
