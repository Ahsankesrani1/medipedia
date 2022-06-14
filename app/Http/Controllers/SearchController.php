<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Medicine;

class SearchController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.home', compact('articles'));
    }

    public function medicines()
    {
        $medicines = [];
        if (!empty(request()->name)) 
        {
            $medicines = Medicine::where('name', 'like', request()->name."%")->get();
        }
        return response()->json($medicines, 200);
    }

    public function articles()
    {
        $articles = Article::all();
        return response()->json($articles, 200);
    }
}
