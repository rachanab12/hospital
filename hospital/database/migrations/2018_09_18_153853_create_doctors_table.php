<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('specfic_field');
          $table->string('gender');
          $table->string('contact');
          $table->unsignedInteger('patient_id');
          $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
          $table->unsignedInteger('medicine_id');
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
        Schema::dropIfExists('doctors');
    }
}
