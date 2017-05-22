<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employer_id');
            $table->unsignedInteger('category_id');
			$table->string('title');
			$table->string('vacancie');
			$table->string('cvType');
			$table->text('instruction')->nullable();
			$table->string('deadline');
			$table->string('ageFrom')->nullable();		
			$table->string('ageTo')->nullable();
			$table->string('gender');
			$table->string('jobLevel');
			$table->text('qualification');
			$table->text('context')->nullable();
			$table->text('responsibility');
			$table->string('experience')->nullable();
			$table->string('require')->nullable();
			$table->string('expFrom')->nullable();
			$table->string('expTo')->nullable();
			$table->string('location');
			$table->string('salary');
			$table->text('benefits');			
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
        Schema::dropIfExists('jobs');
    }
}
