<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->text('history');
          $table->string('gender');
          $table->string('contact');
          $table->string('disease');
          $table->unsignedInteger('patient_id');
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
        Schema::dropIfExists('patients');
    }
}
