<?php

namespace App\Repository\Eloquent;

use App\Models\Quiz;
use App\Repository\QuizRepositoryInterface;
use Illuminate\Support\Collection;

class QuizRepository extends BaseRepository implements QuizRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Quiz $model
     */
    public function __construct(Quiz $model)
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

    public function getQuizHistory(): Collection
    {
        return $this->model->where('done', 1)->get();
    }

    public function scoreboard(): Collection
    {
        return $this->model
        ->where(['done' => 1])
        ->whereRaw('time_left > 0')
        ->orderBy('correct_answers', 'DESC')
        ->orderBy('time_left', 'ASC')
        ->get();
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