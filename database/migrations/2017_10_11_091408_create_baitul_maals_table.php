<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaitulMaalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baitul_maals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baitul_maal_iyanat')->nullable();
            $table->string('baitul_maal_student_welfare')->nullable();
            $table->string('baitul_maal_kolshi')->nullable();
            $table->string('baitul_maal_table_bank')->nullable();
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
        Schema::dropIfExists('baitul_maals');
    }
}
