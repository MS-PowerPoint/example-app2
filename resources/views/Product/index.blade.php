@extends('layouts.index')

@section('title', 'Каталог')

@section('content')
<div class="row m-0 ">

<!-- <a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schoolboys/create" class="btn btn-primary" >CREATE💹</a> -->

<span class="border border-secondary border-3 rounded mt-3 mb-3 pt-1 pb-1 ">
<div class=" col p-0 mt-5 mb-5 d-flex flex-wrap fs-4">

<div class=" col-4 d-flex align-items-center flex-column">
<h4  for="ice-cream-choice">Название</h4>
<input list="ice-cream-flavors1" id="ice-cream-choice" name="ice-cream-choice" />

<datalist id="ice-cream-flavors1">
@foreach($schoolboys as $schoolboy)
  <option value="{{$schoolboy->name}}"></option>
@endforeach
</datalist>
</div>
@dd($schoolboy->category)
<div class=" col-4 d-flex align-items-center flex-column">
<h4  for="ice-cream-choice">Категория</h4>
<input list="ice-cream-flavors2" id="ice-cream-choice" name="ice-cream-choice" />

<datalist id="ice-cream-flavors2">
@foreach($schoolboys as $schoolboy)
  <option value="{{$schoolboy->category->name}}"></option>
@endforeach
</datalist>
</div>

<div class=" col-4 d-flex align-items-center flex-column">
<h4  for="ice-cream-choice">Поставщик</h4>
<input list="ice-cream-flavors3" id="ice-cream-choice" name="ice-cream-choice" />

<datalist id="ice-cream-flavors3">
@foreach($schoolboys as $schoolboy)
  <option value="{{$schoolboy->surname}}"></option>
@endforeach
</datalist>
</div>
</div>



<div class="row m-0 d-flex fs-4 p-0 mb-5 flex-wrap">
<div class=" col-6 d-flex align-items-center flex-column">
<h4 for="ice-cream-choice">Цена</h4>
<input list="ice-cream-flavors4" id="ice-cream-choice" name="ice-cream-choice" />

<datalist id="ice-cream-flavors4">
@foreach($schoolboys as $schoolboy)
  <option value="${{$schoolboy->class}}"></option>
@endforeach
</datalist>
</div>


<div class=" col-6 d-flex align-items-center flex-column">
  <h4  for="ice-cream-choice">Choose a flavor:</h4>
  <input list="ice-cream-flavors5" id="ice-cream-choice" name="ice-cream-choice" />
  
  <datalist id="ice-cream-flavors5">

    <option value="Chocolate"></option>

  </datalist>
</div>

</div>

<div class=" col-12 d-flex align-items-center flex-column">

  <button type="button" class="btn btn-primary w-75 fs-4">Поиск</button>
</div>


</div>
</span>



<div class="row m-0">
<!-- <div class="row row-cols-1 row-cols-md-3 g-4"> -->
@foreach($schoolboys as $schoolboy)
  <div class="col-3  g-4 p-0 " >
    <div class="card h-100 w-75">
      <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="card-img-top " alt="{{$schoolboy->img}}">
      
      <div class="card-body">

        <h4 class="card-title">Название: {{$schoolboy->name}}</h4>
        <p class="card-text">Категория: {{$schoolboy->Category->name}}</p>
        <p class="card-text">Описание: {{$schoolboy->patronymic}}</p>
        <p class="card-text">Количество на складе: {{$schoolboy->estimation}}</p>
        <p class="card-text">Поставщик: {{$schoolboy->surname}}</p>
        <p class="card-text">Цена: ${{$schoolboy->class}}</p>
        <a href="schoolboys/{{$schoolboy->id}}" class="btn btn-primary" >Подробнее</a>
      </div>
    </div>
  </div>
  
  
  
    <!-- <div class="col-6  p-3">
        <div class="card text-center p-3">
        <div class="card-header p-3">
          <h1>Ученик {{$schoolboy->name}}</h1>
        </div>

        <div class="body-body">
            <a href="schoolboys/{{$schoolboy->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schoolboy.delete', ['schoolboy' => $schoolboy->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
          </form>

        </div>
        </div>
    </div>    -->
    @endforeach
<!-- </div> -->
</div>

@endsection