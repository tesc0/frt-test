<?php
namespace App\Repository;

use App\Models\Question;
use Illuminate\Support\Collection;

interface QuestionRepositoryInterface
{
    public function getQuestions($limit, $type, $withAnswers): Collection;
    public function getAllQuestions($withAnswers): Collection;
}