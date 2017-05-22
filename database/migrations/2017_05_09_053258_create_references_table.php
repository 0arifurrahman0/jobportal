<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('name');
			$table->string('designation');
			$table->string('mobile')->nullable();
			$table->string('email')->nullable();
			$table->string('relation');
			$table->string('organization');
			$table->string('phoneOffice')->nullable();
			$table->string('address')->nullable();
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
        Schema::dropIfExists('references');
    }
}
