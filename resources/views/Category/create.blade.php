@extends('layouts.index')

@section('title','Добавление')

@section('content')
<a href="/schools" class="btn btn-primary ">☜(ﾟヮﾟ☜)BACK</a>
<div class="row">
    <form method="post" action="/schools" >
        @csrf  
        <div class="mb-3">
            <!-- <label class="form-label" for="email">Название книги</label> -->
            <input name="name" class="form-control" type="text"  placeholder="Название">
            <!-- <label class="form-label" >Id Автора</label> -->
            <input name="number" class="form-control" type="text"  placeholder="Номер">
            <input name="quantity" class="form-control" type="text"  placeholder="Рейтинг">
            <input name="year" class="form-control" type="text"  placeholder="Год основания 0000-00-00">
            <input name="desk" class="form-control" type="text"  placeholder="Комментарий">
                                    
            <button class="btn btn-primary " type="submit"> Добавить ✔</button>
        </div>  
    </form>
</div>
@endsection