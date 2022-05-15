<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a href="/admin-questions" 
    class="absolute rounded-xl border-green-600 border-2 border-solid left-28 bottom-28 px-3 py-2 text-green-600 hover:text-white hover:bg-green-600"
    >Questions</a>

    <section class="history w-4/5 m-auto mt-6">
    <h4 class="text-center text-xl font-bold">History</h4>
        <table class="m-auto w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Total Score</th>
                    <th>Total Number of unanswered questions</th>
                    <th>Quiz Submit Date / Time</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($history as $entry)
                <tr>
                    <td class="text-center">{{ $entry->guest_name }}</td>
                    <td class="text-center">{{ $entry->guest_lastname }}</td>
                    <td class="text-center">{{ $entry->guest_email }}</td>
                    <td class="text-right">{{ 10 - $entry->correct_answers }}</td>
                    <td class="text-right">{{ (10 - $entry->correct_answered - $entry->correct_answers < 0) ? 0 : 10 - $entry->correct_answered - $entry->correct_answers }}</td>
                    <td class="text-right">{{ $entry->submit_date }}</td>
                </tr>
            @endforeach                
            </tbody>
        </table>
    </section>
</body>
</html>