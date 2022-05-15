<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Test Admin',
             'email' => 'teszt@teszt.hu',
        ]);

        for($i = 0; $i < 10; $i++) {
            $question_id = $i + 1;
            \App\Models\Question::factory()->create([                
                'question' => 'teszt kérdés ' . $question_id,
                'type' => 'multiple',
           ]); 

           for ($j = 0; $j < rand(4, 8); $j++) {
                \App\Models\Answer::factory()->create([                
                    'answer' => 'teszt válasz ' . $question_id . "/" . ($j + 1),
                    'question_id' => $question_id,
                    'correct' => rand(0, 1)
                ]); 
           }
           
        }

        for($i = 10; $i < 20; $i++) {
            $question_id = $i + 1;
            \App\Models\Question::factory()->create([                
                'question' => 'teszt kérdés ' . $question_id,
                'type' => 'binary',
            ]); 

            if (rand(0, 100) < 50) {
                $answer1Correct = 1;
                $answer2Correct = 0;
            } else {
                $answer1Correct = 0;
                $answer2Correct = 1;
            }

           \App\Models\Answer::factory()->create([                
                'answer' => 'Igen' . ($i + 1),
                'question_id' => $question_id,
                'correct' => $answer1Correct
            ]); 
                    
            \App\Models\Answer::factory()->create([                
                'answer' => 'Nem' . ($i + 1),
                'question_id' => $question_id,
                'correct' => $answer2Correct
            ]);            
        }
    }
}
