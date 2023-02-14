@extends('layouts.app')

@section('content')
    <section class="antialiased">

        <div class="pageAbout__me">
            <div class="flex justify-center ">
                <div class="flex justify-center">
                    <img src="/public/img/logo.png" alt="img">
                </div>
            </div>
            <div class="slogan">
                <h1>Лучшие устройства для копирования и печати только у нас! Создавай, печатай, копируй вместе с
                    CopyStar!!!</h1>
            </div>

            <div id="carousel">
                <div class="carousel__img">
                    <img src="/public/img/printer1.png" alt="img" class="img__item">
                    <img src="/public/img/printer7.png" alt="img" class="img__item">
                    <img src="/public/img/printer3.png" alt="img" class="img__item">
                    <img src="/public/img/printer4.png" alt="img" class="img__item">
                    <img src="/public/img/printer5.png" alt="img" class="img__item">

                </div>
                <div class="buttons__control">
                    <button class="prev__but">Назад</button>
                    <button class="next__but">Вперед</button>
                </div>
            </div>


        </div>
        </div>
        </div>
        <script src="/public/js/script.js"></script>

    </section>
@endsection
