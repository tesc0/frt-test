<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\QuizRepositoryInterface; 
use App\Repository\Eloquent\QuizRepository; 
use App\Repository\Eloquent\BaseRepository; 
use App\Repository\QuestionRepositoryInterface; 
use App\Repository\Eloquent\QuestionRepository; 
use App\Repository\UserRepositoryInterface; 
use App\Repository\Eloquent\UserRepository; 
use App\Repository\AnswerRepositoryInterface; 
use App\Repository\Eloquent\AnswerRepository; 

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(QuizRepositoryInterface::class, QuizRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AnswerRepositoryInterface::class, AnswerRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
