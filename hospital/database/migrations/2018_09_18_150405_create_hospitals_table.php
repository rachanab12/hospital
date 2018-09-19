<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->unsignedInteger('patient_id');
          $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
          $table->unsignedInteger('doctor_id');
          $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
          $table->unsignedInteger('user_id');
          $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
          $table->unsignedInteger('test_id');
          $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
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
        Schema::dropIfExists('hospitals');
    }
}
