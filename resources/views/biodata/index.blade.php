@extends('template.template')
@section('title')
    Data Diri Ragas
@endsection

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Daftar Biodata</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table class="min-w-full table-auto">
                <div class="mb-[10px]">
                    <a href="{{ route('input_data_bio') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Input Data</a>
                </div>
                <thead class="mt-5">
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Alamat</th>
                        <th class="py-3 px-6 text-left">No HP</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Tempat Lahir</th>
                        <th class="py-3 px-6 text-left">Tanggal Lahir</th>
                        <th class="py-3 px-6 text-left">Deskripsi</th>
                        <th class="py-3 px-6 text-left">Aksi</th>

                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($biodata as $b => $bio)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ $b + 1 }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->nama }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->alamat }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->no_hp }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->email }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->tempat_lahir }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->tanggal_lahir }}</td>
                            <td class="py-3 px-6 text-left">{{ $bio->deskripsi }}</td>
                            <td class="py-3 px-6 text-left"><a href="{{ route('editData', $bio->id) }}"
                                    class="text-white font bold bg-yellow-500 hover:bg-yellow-700 rounded py-2 px-4 font-bold">Edit</a>
                                <a href=""
                                    class="text-white font bold bg-red-500 hover:bg-red-700 rounded py-2 px-4 font-bold">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
