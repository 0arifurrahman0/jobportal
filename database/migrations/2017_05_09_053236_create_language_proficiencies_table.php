<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_proficiencies', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('language');
			$table->string('writing');
			$table->string('reading');
			$table->string('speaking');
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
        Schema::dropIfExists('language_proficiencies');
    }
}
