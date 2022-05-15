<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="mt-6 w-4/5 m-auto text-center">
    <h4 class="text-center text-xl font-bold">Quiz</h4>
        <div id="guest_data" class="mt-6 text-center">
            <label>Name: <input id="name" class="border-solid border border-gray-400 rounded p-1 mt-1"></label>
            <br>
            <label>Last name: <input id="lastname" class="border-solid border border-gray-400 rounded p-1 mt-1"></label>
            <br>
            <label>Email: <input id="email" class="border-solid border border-gray-400 rounded p-1 mt-1"></label>
        </div>
        <div class="mt-3">
            <label for="toggle_binary">Binary (Yes/No)</label>
            <input type="radio" id="toggle_binary" name="toggle-quiz-type" value="binary" checked>
            <br>
            <label for="toggle_multiple">Multiple choice</label>
            <input type="radio" id="toggle_multiple" name="toggle-quiz-type" value="multiple">
        </div> 
        <div class="mt-3">
            <input type="hidden" name="csrf-token" id="csrf_token" value="{{ csrf_token() }}">
            <button id="start-quiz" type="button" class="rounded px-3 py-2 border-2 border-solid border-blue-400 hover:bg-blue-400 hover:text-white">Start</button>
        </div>
    </main>
    <section id="quiz-content" class="w-4/5 mt-6 m-auto relative">

    </section>
    <script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>