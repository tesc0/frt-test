<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('started')->nullable(false);
            $table->tinyInteger('done')->nullable(false);
            $table->smallInteger('time_left')->nullable(true);
            $table->tinyInteger('answered')->nullable(true);
            $table->tinyInteger('correct_answers')->nullable(true);
            $table->string('guest_name', 255)->nullable(true);
            $table->string('guest_lastname', 255)->nullable(true);
            $table->string('guest_email', 255)->nullable(true);
            $table->datetime('submit_date')->nullable(true);
            $table->enum('type', ['binary', 'multiple'])->default('binary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
};
