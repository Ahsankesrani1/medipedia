<?php

namespace App\Http\Controllers;

use App\Models\Medicine;

class SearchController extends Controller
{
    public function index()
    {
        return view('pages.home');
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
}
