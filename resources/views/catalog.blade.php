@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Каталог</h2>
    <form id="select">
        <select id="select">
            <option value>Все категории</option>
            @foreach ($categories2 as $categories)
            <option value>{{ $categories->name }}</option>
            @endforeach
        </select>
    </form>
    <button type="submit" form="select">Найти</button>
    <div class="catalog__prod">
        @foreach ($products2 as $product)
        <div class="card card__cat">

            <div class="card-header">
                {{ $product->name }}{{--  @if($user->name =="admin") <button type="submit">Удалить</button><button type="submit">Изменить</button> @else  @endif --}}
            </div>
            <div class="card-body card__body-cat">
                <a href="/card/{{ $product->id }}"><img src="{{ $product->img }}" alt="img__card"></a>
            </div>
            <div class="card-footer card-footer__cat text-muted">

                @if (Auth::user())
                <button >В корзину</button>
                    @if ( $product->count>0 )
                    <div class="price__color">Осталось {{ $product->count }} шт.</div>
                    @else Предзаказ
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
