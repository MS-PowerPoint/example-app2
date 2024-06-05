@extends('layouts.index')

@section('title','Добавление')

@section('content')
<a href="/schools" class="btn btn-primary ">☜(ﾟヮﾟ☜)BACK</a>
<div class="row">
    <form method="post" action="/schools/{{$school->id}}/update" >
        @csrf  
        @method('patch')
        <div class="mb-3">
            <!-- <label class="form-label" for="email">Название книги</label> -->
            <input name="name" class="form-control" type="text" value="{{$school->name}}"  placeholder="Название">
            <!-- <label class="form-label" >Id Автора</label> -->
            <input name="number" class="form-control" type="text" value="{{$school->number}}" placeholder="Номер">
            <input name="quantity" class="form-control" type="text" value="{{$school->quantity}}" placeholder="Рейтинг">
            <input name="year" class="form-control" type="text" value="{{$school->year}}" placeholder="Год основания 0000-00-00">
            <input name="desk" class="form-control" type="text" value="{{$school->desk}}" placeholder="Комментарий">
                                    
            <button class="btn btn-primary " type="submit"> Добавить ✔</button>
        </div>  
    </form>
</div>
@endsection