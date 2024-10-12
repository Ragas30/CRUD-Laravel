<?php

namespace App\Http\Controllers\biodata;

use App\Http\Controllers\Controller;
use App\Http\Requests\InputData;
use App\Models\biodata;

class updateController extends Controller
{
    public function update($id, InputData $request)
    {
        if ($request->validated()) {

            biodata::where('id', $id)
                ->update([
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
