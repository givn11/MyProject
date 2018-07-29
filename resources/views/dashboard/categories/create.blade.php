@extends('dashboard.app')

@section('content')
    <h1>Добавить категорию</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('news.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название категории</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="text">Описание</label>
            <textarea name="text" class="form-control" id="text" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Добавить
        </button>

    </form>

@endsection