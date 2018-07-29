<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //return view('shop.index');
        $news = News::orderBy('created_at');
        return view('shop.index', [
                'news' => $news
        ]);
    }
}