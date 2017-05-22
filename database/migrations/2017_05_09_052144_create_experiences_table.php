<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
			$table->string('company');			
			$table->string('business');			
			$table->string('position');			
			$table->string('department')->nullable();			
			$table->string('skill');			
			$table->string('duty')->nullable();			
			$table->string('location')->nullable();			
			$table->string('startDate');			
			$table->string('endDate');					
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
        Schema::dropIfExists('experiences');
    }
}
