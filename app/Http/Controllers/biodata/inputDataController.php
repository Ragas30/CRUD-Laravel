<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller;
use App\Http\Requests\InputData;
use App\Models\biodata;

class inputDataController extends Controller
{
    public function index()
    {
        return view('biodata.input');
    }

    public function prosesInput(inputData $request)
    {
        if ($request->validated()) {

            biodata::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect('/')->with('pesan', 'Data Berhasil Di input');
        }
    }

}
