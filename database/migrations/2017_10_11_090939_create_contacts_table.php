<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member')->nullable();
            $table->string('associate')->nullable();
            $table->string('worker')->nullable();
            $table->string('supporter')->nullable();
            $table->string('friend')->nullable();
            $table->string('schl_student')->nullable();
            $table->string('brl_student')->nullable();
            $table->string('well_wisher')->nullable();
            $table->string('teacher')->nullable();
            $table->string('vip')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
