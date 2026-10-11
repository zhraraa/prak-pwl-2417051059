@extends('layouts.app')
@section('content')

    <div class="flex justify-content-center">
        <div class="w-full max-w-lg mx-auto">

            <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="bg-pink-200 px-6 py-4 text-center">
                    <h1 class="text-xl font-bold text-gray-800">Edit Mata Kuliah</h1>
                </div>
                <div class="p-6">
                    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama_mk" class="block text-sm font-semibold text-gray-600 mb-1">Nama Mata Kuliah</label>
                            <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" placeholder="Masukkan nama mata kuliah" class="w-full border border-pink-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-100" required>
                        </div>

                        <div class="mb-6">
                            <label for="sks" class="block text-sm font-semibold text-gray-600 mb-1">SKS</label>
                            <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" placeholder="Masukkan jumlah SKS" min="1" max="6" class="w-full border border-pink-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-100" required>
                        </div>

                        <button type="submit" class="w-full bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 rounded-full transition-colors text-sm shadow">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection