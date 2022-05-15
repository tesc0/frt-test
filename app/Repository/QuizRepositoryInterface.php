<?php
namespace App\Repository;

use App\Models\Quiz;
use Illuminate\Support\Collection;

interface QuizRepositoryInterface
{
    public function getQuizHistory(): Collection;
    public function scoreboard(): Collection;
}