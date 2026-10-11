@extends('layouts.app')
@section('content')

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="bg-pink-400 hover:bg-pink-500 text-white font-semibold px-5 py-2 rounded-full shadow transition-colors text-sm"> + Tambah Mata Kuliah </a>
    </div>

    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-300 text-green-700 text-sm px-4 py-3 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-center text-sm">
                <thead>
                    <tr class="bg-pink-200 text-gray-700">
                        <th class="py-3 px-4 font-semibold">ID</th>
                        <th class="py-3 px-4 font-semibold">Nama Mata Kuliah</th>
                        <th class="py-3 px-4 font-semibold">SKS</th>
                        <th class="py-3 px-4 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-50">
                    @foreach ($mks as $mk)
                        <tr class="hover:bg-pink-50 transition-colors">
                            <td class="py-3 px-4 text-gray-600">{{ $mk->id }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $mk->nama_mk }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $mk->sks }}</td>
                            <td class="py-3 px-4 flex items-center justify-center gap-2">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="bg-pink-100 hover:bg-pink-200 text-pink-600 font-semibold px-3 py-1 rounded-full text-xs transition-colors">Edit</a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-100 hover:bg-red-200 text-red-500 font-semibold px-3 py-1 rounded-full text-xs transition-colors">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection