<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Repository\UserRepositoryInterface;
use App\Repository\QuizRepositoryInterface;
use App\Repository\QuestionRepositoryInterface;
use App\Repository\AnswerRepositoryInterface;

class Admin extends Controller
{    
    private $userRepository;
    private $quizRepository;
    private $questionRepository;
    private $answerRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,        
        QuizRepositoryInterface $quizRepository,        
        QuestionRepositoryInterface $questionRepository,
        AnswerRepositoryInterface $answerRepository,
    )
    {
        $this->userRepository = $userRepository;
        $this->quizRepository = $quizRepository;
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
    }

    public function login(Request $request)
    {
        $data = [];
        $errors = [];

        $data['success'] = 0;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!empty($validator->failed())) {

            $validatorErrors = $validator->errors();
            foreach ($validatorErrors->getMessages() as $error) {
                $errors[] = $error;
            }
            $data['message'] = 'Érvénytelen adatok kerültek megadásra';
        } else {

            try {
                $email = $request->get('email');
                $password = $request->get('password');

                $user = $this->userRepository->getUserByEmail($email);

                if(empty($user)) {
                    $errors[] = 'no-user-for-email';
                    $data['message'] = 'Nem található felhasználó evvel az email-címmel!';
                } else if(Hash::check($password, $user->password)) {

                    $request->session()->put('user', $user->id);

                    $data['userId'] = $user->id;
                    $data['message'] = 'Sikeres belépés!';
                    $data['success'] = 1;
                }

            } catch (\Exception $e) {

            }
        }

        $data['errors'] = $errors;
        return response()->json($data);
    }

    public function landing()
    {
        $data = [];
        $data['history'] = $this->quizRepository->getQuizHistory();

        return view('admin', $data);
    }

    public function questions()
    {
        $data = [];
        $data['questions'] = $this->questionRepository->getAllQuestions(true);

        return view('questions', $data);
    }

    public function question($id = null)
    {
        $data = [];
        $data['id'] = null;
        if (!empty($id)) {
            $data["question"] = $this->questionRepository->find($id);
            $data["answers"] = $this->answerRepository->getByQuestionId($id);
            $data['id'] = $id;
        }

        return view('question', $data);
    }

    public function saveQuestion(Request $request)
    {
        $data = [];
        $errors = [];

        $data['success'] = 0;

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'question' => 'required',
        ]);

        if(!empty($validator->failed())) {

            $validatorErrors = $validator->errors();
            foreach ($validatorErrors->getMessages() as $error) {
                $errors[] = $error;
            }
            $data['message'] = 'Érvénytelen adatok kerültek megadásra';
        } else {

            try {
                $type = $request->get('type');
                $question = $request->get('question');
                $questionId = 0;
                if (!empty($request->get('question_id'))) {
                    $questionId = $request->get('question_id');
                }

                $questionData = [
                    'question' => $question,
                    'type' => $type
                ];
                if (!empty($questionId)) {                    
                    $this->questionRepository->update(["id" => $questionId], $questionData); 
                } else {
                    $this->questionRepository->create($questionData); 
                }
                

                $data['message'] = 'Save successful!';
                $data['success'] = 1;

            } catch (\Exception $e) {

            }
        }

        $data['errors'] = $errors;
        return response()->json($data);
    }

    public function saveAnswer(Request $request)
    {
        $data = [];
        $errors = [];

        $data['success'] = 0;

        $validator = Validator::make($request->all(), [
            'answer' => 'required',
            'question_id' => 'required',
        ]);

        if(!empty($validator->failed())) {

            $validatorErrors = $validator->errors();
            foreach ($validatorErrors->getMessages() as $error) {
                $errors[] = $error;
            }
            $data['message'] = 'Érvénytelen adatok kerültek megadásra';
        } else {

            try {
                $answer = $request->get('answer');
                $questionId = $request->get('question_id');
                $correct = !empty($request->get('correct')) ? 1 : 0;

                $answerId = 0;
                if (!empty($request->get('answer_id'))) {
                    $answerId = $request->get('answer_id');
                }

                $answerData = [
                    'question_id' => $questionId,
                    'answer' => $answer,
                    'correct' => $correct
                ];
                
                if (!empty($answerId)) {                    
                    $this->answerRepository->update(["id" => $answerId], $answerData); 
                } else {
                    $this->answerRepository->create($answerData); 
                }
                
                $data['message'] = 'Save successful!';
                $data['success'] = 1;

            } catch (\Exception $e) {

            }
        }

        $data['errors'] = $errors;
        return response()->json($data);
    }

    public function answer()
    {
        return view('answer');
    }
}
