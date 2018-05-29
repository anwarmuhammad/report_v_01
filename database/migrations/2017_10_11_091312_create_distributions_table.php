<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('distribution_islamic_book')->nullable();
            $table->string('distribution_kishor_mag')->nullable();
            $table->string('distribution_english_mag')->nullable();
            $table->string('distribution_ch_sangbad')->nullable();
            $table->string('distribution_perspective')->nullable();
            $table->string('distribution_porichiti')->nullable();
            $table->string('distribution_class_routine')->nullable();
            $table->string('distribution_card')->nullable();
            $table->string('distribution_gift')->nullable();
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
        Schema::dropIfExists('distributions');
    }
}
