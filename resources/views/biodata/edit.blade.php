@extends('template.template')
@section('title')
    Halaman Input Data Diri
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-800 text-white p-4 rounded-t-lg">
                        <h4 class="text-xl font-semibold">Input Data Diri</h4>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('updateData', $data->id) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                                <span class="text-red-800">{{ $errors->first('nama') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ $data->alamat }}">
                                <span class="text-red-800">{{ $errors->first('alamat') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="no_hp" class="block text-gray-700 text-sm font-bold mb-2">No HP</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="no_hp" name="no_hp" placeholder="Masukkan No HP" value="{{ $data->no_hp }}">
                                <span class="text-red-800">{{ $errors->first('no_hp') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="email" name="email" placeholder="Masukkan Email" value="{{ $data->email }}">
                                <span class="text-red-800">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="tempat_lahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat
                                    Lahir</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="tempat_lahir" name="tempat_lahir" placeholder="Masukan tanggal lahir!"
                                    value="{{ $data->tempat_lahir }}">
                                <span class="text-red-800">{{ $errors->first('tempat_lahir') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Tanggal
                                    Lahir</label>
                                <input type="date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="tanggal_lahir" name="tanggal_lahir" placeholder=""
                                    value="{{ $data->tanggal_lahir }}">
                                <span class="text-red-800">{{ $errors->first('tanggal_lahir') }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="deskripsi" name="deskripsi" placeholder="Deskripsikan Diri mu sepuasnya"
                                    value="{{ $data->deskripsi }}">
                                <span class="text-red-800">{{ $errors->first('deskripsi') }}</span>
                            </div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                            <a href="{{ route('home') }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
