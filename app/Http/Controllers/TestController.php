<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function dashboard(){
        //echo __METHOD__;
        //echo ('dgfdjghjghkjhglkhgh');
        return view('dashboard.app');
    }
    public function index()
    {
        //$news = DB::table('news')->get(); //Получаем все новости из таблицы news

        $news = News::all(); //Получаем все новости из таблицы news

        $novost = News::find(1); //Получаем новость с id=1 из таблицы news методом find
        $novost->title = 'новость 1';
        $novost->save();

        //dd($novost);
        //echo __METHOD__;
        //return view('shop.index');
        return view('test', [
            'news' => $news
        ]);
    }
}