<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }

    public function store()
    {
        $validator = Validator::make(request()->all(),
        [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ],
    );

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator);
        }

        $about = new About();
        $about->name = request()->name;
        $about->email = request()->email;
        $about->subject = request()->subject;
        $about->message = request()->message;
        if ($about->save()) 
        {
            return back()->with('message', 'Message Sent');
        }
    }
}
