<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSpecialistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('doctor_specialty',function(BluePrint $table){
            $table->engine = 'InnoDB';
            $table->integer('specialty_id');
            $table->integer('doctor_id');
//            $table->index(['specialty_id', 'user_id']);
//            $table->primary(['specialty_id', 'user_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_specialty');
    }
}
