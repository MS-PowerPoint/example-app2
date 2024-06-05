@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    <div class="row m-0 ">


        <span class="border border-secondary border-3 rounded mt-3 mb-3 pt-1 pb-1 ">
            <div class=" col p-0 mt-5 mb-5 d-flex flex-wrap fs-4">

                <div class=" col-4 d-flex align-items-center flex-column">
                    <h4 for="ice-cream-choice">Название</h4>
                    <input list="ice-cream-flavors1" id="ice-cream-choice" name="ice-cream-choice" />

                    <datalist id="ice-cream-flavors1">
                        @foreach ($Products as $Product)
                            <option value="{{ $Product->name }}"></option>
                        @endforeach
                    </datalist>
                </div>

                <div class=" col-4 d-flex align-items-center flex-column">
                    <h4 for="ice-cream-choice">Категория</h4>
                    <input list="ice-cream-flavors2" id="ice-cream-choice" name="ice-cream-choice" />

                    <datalist id="ice-cream-flavors2">
                        @foreach ($Categories as $Category)
                            <option value="{{ $Category->name }}"></option>
                        @endforeach
                    </datalist>
                </div>



                <div class="row m-0 d-flex fs-4 p-0 mb-5 flex-wrap">

                    <div class=" col-12 d-flex align-items-center flex-column">

                        <button type="button" class="btn btn-primary w-75 fs-4">Поиск</button>
                    </div>

                </div>
        </span>



        <div class="row m-0">

            @foreach ($Products as $Product)
                <div class="col-3  g-4 p-0 ">
                    <div class="card h-100 w-75">
                        <img src="{{ asset('storage/' . $Product->img) }}" class="card-img-top "
                            alt="{{ $Product->img }}">

                        <div class="card-body">

                            <h4 class="card-title">Название: {{ $Product->name }}</h4>
                            <p class="card-text">Категория: {{ $Product->category->name }}</p>
                            <p class="card-text">Описание: {{ $Product->desc }}</p>
                            <p class="card-text">Количество на складе: {{ $Product->count }}</p>
                            <p class="card-text">Цена: ${{ $Product->price}}</p>
                            <a href="#" class="btn btn-primary">В корзину</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    @endsection
