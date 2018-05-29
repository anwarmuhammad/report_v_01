<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('report_member')->nullable();
            $table->string('report_associate')->nullable();
            $table->string('report_worker')->nullable();
            $table->string('report_friend')->nullable();
            $table->string('report_member_applicant')->nullable();
            $table->string('report_associate_applicant')->nullable();
            $table->string('report_supporter')->nullable();
            $table->string('report_well_wisher')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
