<?php

namespace App\Http\Controllers\biodata;

use App\Http\Controllers\Controller;
use App\Models\biodata;

class editDataController extends Controller
{
    public function index($id)
    {
        $data = biodata::find($id);
        return view('biodata.edit', compact('data'));
    }
}
