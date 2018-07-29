@extends('dashboard.app')

@section('title')
    Админка
@endsection

@section('content')
    <h1>Список категорий</h1>
    <hr>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название категории</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td><a href="#">Edit</a> | <a href="#">Удалить</a></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <a class="btn btn-primary float-right" href="{{ route('categories.create') }}">Добавить категорию</a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection