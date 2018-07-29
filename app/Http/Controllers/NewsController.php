<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource. (список ресурсов)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Получаем все новости из базы данных
        $news = News::orderBy('id', 'desc')->get();
        return view('dashboard.news.index',[
           'news' => $news //Отдаём шаблон
        ]);
    }

    /**
     * Show the form for creating a new resource. (Отображает форму для создания ресурса)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. (Обработчик запроса на создание ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. (Отображает конкретную запись)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. (Отображает форму для редактирования ресурса)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage. (Обновляет товар в БД. Обработчик обновления конкретного ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. (Удаление конкретного ресурса с БД)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
