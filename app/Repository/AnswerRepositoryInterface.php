<?php
namespace App\Repository;

use App\Models\Answer;
use Illuminate\Support\Collection;

interface AnswerRepositoryInterface
{
    public function getByQuestionId($questionId): Collection;
    public function isAnswerCorrect($answerId): bool;
}