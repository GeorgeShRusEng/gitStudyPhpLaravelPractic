@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Личный кабинет') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                        {{ __('You are logged in!') }}
                    </div>
                    @endif
                    <div class="bascket">
                        <p>
                            <h4>Корзина</h4>
                        </p>
                        <div class="orders">
                            <ul>
                                @foreach($products2 as $product)
                                <li><img src="{{ $product->img }}" alt="img" class="img__item"></li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
