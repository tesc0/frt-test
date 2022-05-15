<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="relative w-full h-96">
    <main class="text-center absolute top-1/2 left-1/2 -translate-x-2/4 -translate-y-2/4">
        <label>Email: <input type="email" id="email" class="border-solid border border-gray-400 rounded p-1 mt-1"></label>
        <br>
        <label>Jelszó: <input type="password" id="password" class="border-solid border border-gray-400 rounded p-1 mt-1"></label>
        <br>
        <input type="hidden" id="csrf_token" value="{{ csrf_token() }}" class="border-solid border border-gray-400 rounded p-1 mt-1">
        <br>
        <button id="admin-login" class="rounded px-3 py-2 border-2 border-solid border-blue-400 hover:bg-blue-400 hover:text-white">Bejelentkezés</button>
    </main>
    <script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>