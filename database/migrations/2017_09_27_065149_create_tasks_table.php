<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quran_read')->nullable();
            $table->string('quran_memorize')->nullable();
            $table->string('hadith_read')->nullable();
            $table->string('hadith_memorize')->nullable();
            $table->string('literature_islamic')->nullable();
            $table->string('literature_others')->nullable();
            $table->string('salat_jamaat')->nullable();
            $table->string('salat_kadha')->nullable();

            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('tasks');
    }
}
