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
                                <div class="prod__list">
                                    @foreach ($products2 as $product)
                                        <table>
                                            <div class="prod__item">
                                                <td><img class="img__item-card" src="{{ $product->img }}" alt="img">
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td> {{ $product->price }} р.</td>
                                                <td class="take__count"><input type="number" name="" id=""></td>
                                                <td>Сумма</td>
                                            </div>
                                        </table>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
