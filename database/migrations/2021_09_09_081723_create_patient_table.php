<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_patient', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->longText('general_comments');
            $table->integer('gender_id')->unsigned()->default(1);
            $table->integer('service_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('tbl_gender')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('tbl_service')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_patient');
    }
}
