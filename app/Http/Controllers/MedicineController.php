<?php

namespace App\Http\Controllers;

use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        return view('pages.info');
    }
    public function show()
    {
        $medicine = Medicine::findOrFail(request()->id);
        return response()->json($medicine, 200);
    }
}
