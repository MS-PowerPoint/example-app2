@extends('layouts.index')

@section('title','Добавление')

@section('content')
<a href="/schoolboys" class="btn btn-primary ">☜(ﾟヮﾟ☜)BACK</a>
<div class="row">
    <form method="post" action="/schoolboys" >
        @csrf  
        <div class="mb-3">
            <!-- <label class="form-label" for="email">Название книги</label> -->
            <input name="name" class="form-control" type="text"  placeholder="Имя">
            <!-- <label class="form-label" >Id Автора</label> -->
            <input name="surname" class="form-control" type="text"  placeholder="Фамилия">
            <input name="patronymic" class="form-control" type="text"  placeholder="Отчество">
            <input name="class" class="form-control" type="text"  placeholder="класс">
            <input name="estimation" class="form-control" type="text"  placeholder="Средняя оценка целое число">
            <input name="school_id" class="form-control" type="text"  placeholder="номер школы">
                                    
            <button class="btn btn-primary " type="submit"> Добавить ✔</button>
        </div>  
    </form>
</div>
@endsection