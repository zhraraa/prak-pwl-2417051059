<nav class="bg-white border-b border-pink-200 shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-pink-500 font-bold text-xl tracking-wide hover:text-pink-600 transition-colors">
            PWL PRAK
        </a>

        <div class="flex items-center gap-3">
            <a href="{{ url('/user') }}"
               class="text-gray-600 font-medium px-4 py-1.5 rounded-full hover:text-pink-500 hover:bg-pink-50 transition-colors text-sm">
                Daftar User
            </a>
            <a href="{{ route('user.create') }}"
               class="bg-pink-400 hover:bg-pink-500 text-white font-semibold px-5 py-1.5 rounded-full transition-colors text-sm shadow-sm">
                Tambah User
            </a>
        </div>
    </div>
</nav>