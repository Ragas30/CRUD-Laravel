<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'deskripsi' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_hp.required' => 'No HP harus diisi',
            'no_hp.numeric' => 'No HP harus berupa angka',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus berupa email',
            'tempat_lahir.required' => 'Tempat Lahir harus diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir harus diisi',
            'deskripsi.required' => 'Deskripsikan Diri kamu',
        ];
    }
}
