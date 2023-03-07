@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Каталог</h2>
        <form action="/public/catalog" id="select">
            <select name="cat_id" id="select">
                <option value=0>Все категории</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit" form="select">Найти</button>
        </form>

        <div class="filters">
            <a href="{{ route('catalogPrice') }}">По убыванию цены</a>
            <a href="{{ route('catalogYear') }}">По году</a>
            <a href="{{ route('catalogName') }}">По имени</a>
            <button type="submit" form="select">Сортировать</button>
        </div>

        <br>

        <div class="catalog__prod">

            @foreach ($products as $product)
                <div class="card card__cat">
                    <div class="card-header">
                        {{ $product->name }} @auth()
                            @if (Auth::user()->login == 'admin')
                                <button type="submit">Удалить</button> <button type="submit">Изменить</button>
                            @else
                            @endif
                        @endauth
                    </div>
                    <div class="card-body card__body-cat">
                        <a href="/card/{{ $product->id }}"><img src="{{ $product->img }}" alt="img__card"></a>
                    </div>
                    <div class="card-footer card-footer__cat text-muted">
                        @if (Auth::user())
                            @if ($product->count > 0)
                                <a href="{{ route('cartAdd', $product->id) }}" class="btn__byc">В корзину</a>
                                <div class="price__color">Осталось {{ $product->count }} шт.</div>
                            @else
                                <button class="btn__byc">Предзаказ</button>
                                Нет на складе
                            @endif
                        @else
                        @endif
                        <div>{{ $product->price }} р.</div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
