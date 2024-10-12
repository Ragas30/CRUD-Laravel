<?php

namespace App\Http\Controllers\biodata;

use App\Http\Controllers\Controller;
use App\Models\biodata;

class BioController extends Controller
{
    public function index()
    {
        $data['biodata'] = biodata::get();
        return view('biodata.index', $data);
    }
}
