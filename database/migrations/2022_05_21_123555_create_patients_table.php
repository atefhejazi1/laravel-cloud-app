<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 50);
            $table->string('id_number', 30);
            
            $table->unsignedBigInteger('doc_patient');
            $table->unsignedBigInteger('dis_patient');
            $table->unsignedBigInteger('app_patient');
            $table->string('photo_patient', 500);
            
            $table->foreign('doc_patient')->references('id')->on('doctors');
            $table->foreign('dis_patient')->references('id')->on('diseases');
            $table->foreign('app_patient')->references('id')->on('appointments');
            
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
};
