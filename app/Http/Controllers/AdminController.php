<?php

namespace App\Http\Controllers;

use App\Models\About;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin');
    }

    public function messages()
    {
        $messages = About::all();
        return response()->json($messages, 200);
    }
}
