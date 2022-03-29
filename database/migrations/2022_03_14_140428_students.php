<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 250);
            $table->string('rollno', 50);
            $table->string('program', 150);
            $table->string('semester', 100);
            $table->string('phone_no',15);
            $table->string('address', 100);
            $table->string('email', 50);
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
        Schema::dropIfExists('students');
    }
}
