@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>
                        <h2>{{ $products2->name }}</h2>
                        </p>
                    </div>
                    <div class="card__body-card">
                        <img src="{{ $products2->img }}" alt="img">
                    </div>
                    <div class="card-footer__card">
                        <p>
                        <h4>Цена: {{ $products2->price }}</h4>
                        </p>
                        <p>
                        <h4>Сделано в {{ $products2->country }}</h4>
                        </p>
                        <p>
                        <h4>Произведено в {{ $products2->year }}</h4>
                        </p>
                        <p>
                        <h4>Модель {{ $products2->model }}</h4>
                        </p>
                        @auth

                        <div> <button class="btn__by">В корзину</button></div> @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
