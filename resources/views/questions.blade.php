<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a href="/admin-question" 
    class="absolute rounded-xl border-green-600 border-2 border-solid left-28 bottom-28 px-3 py-2 text-green-600 hover:text-white hover:bg-green-600">New question</a>

    <div class="mt-6">
    <h4 class="text-center text-xl font-bold">Questions</h4>
    <div class="w-4/5 m-auto  mt-6">
    @foreach ($questions as $question)
        <div class="flex justify-between">
            <span>{{ $question->type }}</span>
            <span>{{ $question->question }}</span>
            <span>Number of answers: {{ $question->ans_count }}</span>
            <span><a href="/admin-question/{{ $question->id }}" class="hover:underline hover:text-blue-400">Edit</a>
        </div>
    @endforeach   
    </div>
    </div>
</body>
</html>