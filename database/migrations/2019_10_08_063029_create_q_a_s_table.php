<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_a_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('answers')->default(0);
            $table->integer('votes')->default(0);
            $table->unsignedInteger('best_answer_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('q_a_s');
    }
}
