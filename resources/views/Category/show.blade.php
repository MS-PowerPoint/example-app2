@extends('layouts.index')

@section('title', 'Ученик')

@section('content')
<a href="/" class="btn btn-primary" >☜(ﾟヮﾟ☜)BACK</a>
<a href="/schools/create" class="btn btn-primary" >CREATE💹</a>
<div class="row">

    <div class="col-6  p-3">
        <div class="card text-center p-3">
        <div class="card-header p-3">
            <h1>Ученик {{$school->name}}</h1>
        </div>

        <div class="body-body">
            <h5 class="card-title">{{$school->id}}</h5>
            <p class="card-text">{{$school->desk}}</p>

            <a href="/schools/{{$school->id}}/update" class="btn btn-primary" > Изменить✍</a>
            
            <form action="{{ route('schools.delete', ['school' => $school->id]) }}" method="post">
            @method('delete')
            @csrf 
            <input class="btn btn-primary" type="submit" value="Удалить😡">
            
            </form>

        </div>
        </div>
    </div>   

</div>
@endsection