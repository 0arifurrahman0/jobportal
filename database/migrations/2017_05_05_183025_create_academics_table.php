<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('eduLevel');
            $table->string('examTitle');
            $table->string('majorGroup');
            $table->string('instName');
            $table->string('resultType');
            $table->string('marks')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('scale')->nullable();
            $table->string('passYear');
            $table->string('duration')->nullable();
            $table->string('achievment')->nullable();
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
        Schema::dropIfExists('academics');
    }
}
