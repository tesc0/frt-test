<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Repository\QuizRepositoryInterface;
use App\Repository\QuestionRepositoryInterface;
use App\Repository\AnswerRepositoryInterface;

class Quiz extends Controller 
{    
    private $quizRepository;
    private $questionRepository;

    public function __construct(
        QuizRepositoryInterface $quizRepository,
        QuestionRepositoryInterface $questionRepository,
        AnswerRepositoryInterface $answerRepository
    ) 
    {
        $this->quizRepository = $quizRepository;
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
    }

    public function initQuiz()
    {
        return view('index');
    }

    public function startQuiz(Request $request)
    {
        $type = $request->get('type');

        $quizData = [
            'started' => 1,
            'done' => 0,
            'type' => $type,
            'guest_name' => $request->get('name'),
            'guest_lastname' => $request->get('lastname'),
            'guest_email' => $request->get('email'),
        ];
        $result = $this->quizRepository->create($quizData);  

        $data['questions'] = $this->questionRepository->getQuestions(10, $type, true);
        $data['quizId'] = $result->id;
        $data["success"] = 1;

        return response()->json($data);
    }

    public function submitQuiz(Request $request)
    {
        $data = [];

        $answered = $correct_answers = 0;
        if (!empty($request->get('answer'))) {
            foreach ($request->get('answer') as $questionId => $item) {
                foreach ($item as $answerId) {
                    if ($this->answerRepository->isAnswerCorrect($answerId)) {
                        $correct_answers++;
                    }
                }
                $answered++;
            }
        }

        $quizData = [
            'submit_date' => date('Y-m-d H:i:s'),
            'done' => 1,
            'time_left' => $request->get('time_left'),
            'answered' => $answered,
            'correct_answers' => $correct_answers
        ];
        $result = $this->quizRepository->update(['id' => $request->get('quiz_id')], $quizData); 

        $data['success'] = 1;

        return response()->json($data);
    }

    public function scoreboard()
    {
        $data = [];
        $data['scoreboard'] = $this->quizRepository->scoreboard();
        return view('scoreboard', $data);
    }

    public function stats()
    {
        $data = [];
        return view('stats', $data);
    }
}