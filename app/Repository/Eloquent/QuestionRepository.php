<?php

namespace App\Repository\Eloquent;

use App\Models\Question;
use App\Repository\QuestionRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Question $model
     */
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function getQuestions($limit = 10, $type = 'binary', $withAnswers): Collection
    {
        $questions = $this->model
            ->where('type', $type)
            ->limit($limit)
            ->get();

        foreach ($questions as &$question) {
            $question->answers = DB::table('answers')->where(['question_id' => $question->id])->get();
        }
        return $questions;
    }

    public function getAllQuestions($withAnswers = true): Collection
    {
        if($withAnswers) {
            $questions = $this->model
            ->select('questions.id', 'questions.question', 'questions.type', DB::raw('count(answers.id) as ans_count'))
            ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
            ->groupBy('questions.id')
            ->get();

        } else {
            $questions = $this->model->get();
        }
       
        return $questions;
    }

    public function delete($eventId): bool
    {
        try {
            $this->model->where(['id' => $eventId])->update(['deleted' => 1]);

            return true;
        } catch(\Exception $e) {
            return false;
        }
    }
}