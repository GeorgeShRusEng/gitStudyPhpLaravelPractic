@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Каталог</h2>
        <select>
            @foreach ($categories2 as $categories)
                <option>{{ $categories->name }}</option>
            @endforeach
        </select>
        <div class="catalog__prod">
            @foreach ($products2 as $product)
                <div class="card card__cat">
                    <div class="card-header">
                        {{ $product->name }}
                    </div>
                    <div class="card-body card__body-cat">
                        <img src="{{ $product->img }}" alt="img__card">
                    </div>
                    <div class="card-footer card-footer__cat text-muted">

                        @if (Auth::user())
                            <button>В корзину</button>
                        @else
                        @endif
                        <div>{{ $product->price }} р.</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
