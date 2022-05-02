<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = $this->getNews();
        // dd($news);
        return view('news.index', [
            'newsList' => $news,
        ]);
    }

    public function show($id){
        $news = $this->getNews($id);
        // dd($news);
        return view('news.show', [
            'news' => $news,
        ]);
    }

    public function categories(){
        $categories = $this->getCategories();
        return view('news.categories', [
            'categories' => $categories,
        ]);
    }

    public function newsByCategory($id){
        $newsByCategory = $this->getNewsByCategory($id);
        return view('news.newsByCategory', [
            'news' => $newsByCategory,
        ]);
    }
}
