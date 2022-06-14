<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.admin', compact('articles'));
    }

    public function messages()
    {
        $messages = About::all();
        return response()->json($messages, 200);
    }

    public function articleDetail()
    {
        $artilce = Article::find(request()->id)->description;
        return response()->json($artilce, 200);
    }

    public function updateArticle()
    {
        $artilce = Article::find(request()->id);
        $artilce->description = request()->description;
        if($artilce->update())
        {
            return response()->json('Article Updated',200);
        }
    }
}
