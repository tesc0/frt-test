<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="w-4/5 mt-6 m-auto">
        <h4 class="text-center text-xl font-bold">Question details</h4>
    <div class="relative my-10">
        <label>Type:</label><br>
        @if ($id) 
            <label><input type="radio" name="question-type" value="binary" @checked(old('binary', $question->type))> Binary (Yes/No)</label>
            <br>
            <label><input type="radio" name="question-type" value="multiple" @checked(old('multiple', $question->type))> Multiple choice</label>
        @else
            <label><input type="radio" name="question-type" value="binary" checked> Binary (Yes/No)</label>
            <br>
            <label><input type="radio" name="question-type" value="multiple"> Multiple choice</label>
        @endif
        </label>
        <br>
        <br>
        <label>Question:<br>
            <input type="text" id="question" value="{{ $id ? $question->question : '' }}" class="border-solid border border-gray-400 rounded p-1">
        </label>
        <br>
        <br>
        @if ($id) 
            <input type="hidden" id="question_id" value="{{ $id }}">
        @endif
        <input type="hidden" name="csrf-token" id="csrf_token" value="{{ csrf_token() }}">
        <button 
        class="rounded-xl border-blue-600 border-2 border-solid px-2 py-1 text-blue-600 hover:text-white hover:bg-blue-600 absolute l-50 b-0"
        id="save-question">Save</button>
    </div>

    <div class="mt-10">
        <h4 class="text-lg font-bold">Answers</h4>

        @isset ($answers)
            @foreach ($answers as $answer)
            <div class="mt-1">
                <input type="text" value="{{ $answer->answer }}" id="answer[{{ $answer->id }}]" class="rounded border border-gray-400 p-1">
                <input type="checkbox" {{ $answer->correct ? 'checked' : ''}} >
                <button data-answer="{{ $question->id }}" class="update-answer text-sm rounded-xl border-orange-600 border-2 border-solid left-28 bottom-28 px-2 py-1 text-orange-600 hover:text-white hover:bg-orange-600 text-sm">Edit</button>
            </div>
            @endforeach 
        @endisset
        <input type="text" id="new_answer"
        class="border-solid border border-gray-400 rounded p-1 mt-1"> 
        <input type="checkbox">
        <button id="save-answer"
        class="rounded-xl border-gray-600 border-2 border-solid left-28 bottom-28 px-2 py-1 text-gray-600 hover:text-white hover:bg-gray-600 text-sm">Save answer</button>
    </div>
    </div>
    <script src="{{ asset('js/quiz.js') }}"></script>
</body>
</html>