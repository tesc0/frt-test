<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="mt-6">
        <h4 class="text-center text-xl font-bold">Scoreboard</h4>
        <table class="w-3/4 m-auto mt-6">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number of correct answers</th>
                    <th>Time used on taking the quiz</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scoreboard as $row)
                <tr>
                    <td class="text-center">{{ $row->guest_name }}</td>
                    <td class="text-center">{{ $row->guest_email }}</td>
                    <td class="text-center">{{ $row->correct_answers }}</td>
                    <td class="text-right">{{ round((300 - $row->time_left) / 60) }}:{{ (300 - $row->time_left) % 60 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/" class="absolute rounded-xl border-red-600 border-2 border-solid left-28 bottom-28 px-3 py-2 text-red-600 hover:text-white hover:bg-red-600">Restart</a>
    </main>
</body>
</html>