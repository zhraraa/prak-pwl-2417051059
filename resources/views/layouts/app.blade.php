<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex flex-col font-sans">
    @include('components.navbar')

    <main class="flex-1 py-10 px-4">
        <div class="max-w-5xl mx-auto">
            @yield('content')
        </div>
    </main>

    @include('components.footer')
</body>
</html>