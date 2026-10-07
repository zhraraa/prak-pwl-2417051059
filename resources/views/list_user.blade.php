@extends('layouts.app')
@section('content')

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Pengguna</h1>
        <a href="{{ route('user.create') }}"
           class="bg-pink-400 hover:bg-pink-500 text-white font-semibold px-5 py-2 rounded-full shadow transition-colors text-sm">
            + Tambah Pengguna
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-center text-sm">
                <thead>
                    <tr class="bg-pink-200 text-gray-700">
                        <th class="py-3 px-4 font-semibold">ID</th>
                        <th class="py-3 px-4 font-semibold">Nama</th>
                        <th class="py-3 px-4 font-semibold">NPM</th>
                        <th class="py-3 px-4 font-semibold">Kelas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-50">
                    @foreach ($users as $user)
                        <tr class="hover:bg-pink-50 transition-colors">
                            <td class="py-3 px-4 text-gray-600">{{ $user->id }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $user->nama }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $user->nim }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $user->nama_kelas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection