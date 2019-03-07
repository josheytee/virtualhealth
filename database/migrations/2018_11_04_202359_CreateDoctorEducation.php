<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('education', function (BluePrint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('doctor_id');
            $table->string('title');
            $table->string('discipline');
            $table->string('school');
            $table->string('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('education');
    }
}
