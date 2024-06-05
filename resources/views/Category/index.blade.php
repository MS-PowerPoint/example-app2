@extends('layouts.index')

@section('title', 'Главная')

@section('content')

<!-- <a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schools/create" class="btn btn-primary" >CREATE💹</a> -->
<!-- 
     row row-cols-12 row-cols-md-4 g-4 
 -->


 <div id="carouselExampleIndicators" class="carousel slide w-50 mt-5 " data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="storage/img/space3/space3_01.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="storage/img/space3/space3_01.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="storage/img/space3/space3_01.JPG" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class=""  >
    @foreach($schools as $school)

    
    <br>
    <br>
    <br>
    <!-- 
        margin: 60px;padding: 0px;
     -->
    <a href="/schoolboys" style=" margin-bottom: 50px;">
        <div class="card text-center" >
            <!-- <img class="img-fluid" style="height: 200px;" src="{{asset('storage/img/categori-img/' . $school->desk)}}" alt="{{$school->desk}}"> -->
            <div class="card-header" style="width: 100%">
                <h4>{{$school->name}}</h4>
            </div>
        </div>
        <!-- <div class="body-body">
            <h5 class="card-title">{{$school->name}}</h5>
            <p class="card-text">{{$school->desk}}</p>
            <a href="schools/{{$school->id}}" class="btn btn-primary" > Подробнее😲</a>
            <a href="schools/{{$school->id}}/update" class="btn btn-primary" > Изменить✍</a>
            <form action="{{ route('schools.delete', ['school' => $school->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            </form>
        </div> -->
    </a>

    <div id="myCarousel{{$school->id}}" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-inner w-100">

        
        @php
            $i = 1;
        @endphp
        @foreach($schoolboys as $schoolboy)
        
        
        @if($schoolboy->school_id==$school->id)
        
        @if($i==1)
        @php
            $i = 0;
        @endphp
        <div class="carousel-item active">
            
        
        <div class="card" style="width: 18rem;">
                
                <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="card-img-top" alt="{{$schoolboy->img}}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <p class="list-group-item">An item</p>
                    <p class="list-group-item">A second item</p>
                    <p class="list-group-item">A third item</p>
                </ul>
                <div class="card-body">
                    
                    <a href="#" class="card-link">Подробнее</a>
                </div>
                </div>

        </div>
        

        @elseif($i==0)
        <div class="carousel-item">
            
            
            <div class="card" style="width: 18rem;">
                
            <img src="{{asset('storage/img/space3/' . $schoolboy->img)}}" class="card-img-top" alt="{{$schoolboy->img}}">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <p class="list-group-item">An item</p>
                <p class="list-group-item">A second item</p>
                <p class="list-group-item">A third item</p>
            </ul>
            <div class="card-body">
                
                <a href="#" class="card-link">Подробнее</a>
            </div>
            </div>


        </div>


        @endif
        @endif
        
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel{{$school->id}}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel{{$school->id}}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
        
    </div>
    <br>
    <br>
    @endforeach
</div>
@endsection