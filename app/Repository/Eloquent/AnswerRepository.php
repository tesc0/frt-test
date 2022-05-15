<?php

namespace App\Repository\Eloquent;

use App\Models\Answer;
use App\Repository\AnswerRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AnswerRepository extends BaseRepository implements AnswerRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Answer $model
     */
    public function __construct(Answer $model)
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

    public function getByQuestionId($questionId): Collection
    {
        return $this->model
            ->where('question_id', $questionId)
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

    public function isAnswerCorrect($answerId): bool
    {
        $result = $this->find($answerId);
        return ($result->correct > 0) ? true : false;
    }
}