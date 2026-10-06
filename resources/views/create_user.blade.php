@extends('layouts.app')
@section('content')

    <div class="flex justify-content-center">
        <div class="w-full max-w-lg mx-auto">

            <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="bg-pink-200 px-6 py-4 text-center">
                    <h1 class="text-xl font-bold text-gray-800">Buat Pengguna Baru</h1>
                </div>
                <div class="p-6">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-semibold text-gray-600 mb-1">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama"
                                   class="w-full border border-pink-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-100"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label for="npm" class="block text-sm font-semibold text-gray-600 mb-1">NPM</label>
                            <input type="text" id="npm" name="npm" placeholder="Masukkan NPM"
                                   class="w-full border border-pink-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-100"
                                   required>
                        </div>

                        <div class="mb-6">
                            <label for="kelas_id" class="block text-sm font-semibold text-gray-600 mb-1">Kelas</label>
                            <select id="kelas_id" name="kelas_id"
                                    class="w-full border border-pink-200 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-100"
                                    required>
                                <option value="" disabled selected>Pilih kelas</option>
                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                                class="w-full bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 rounded-full transition-colors text-sm shadow">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection