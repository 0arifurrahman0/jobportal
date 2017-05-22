<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprofiles', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('employer_id');
			$table->string('name')->nullable();
			$table->string('type')->nullable();
			$table->text('details')->nullable();
			$table->string('address')->nullable();
			$table->string('country')->nullable();
			$table->string('city')->nullable();
			$table->string('area')->nullable();			
			$table->string('person')->nullable();
			$table->string('designation')->nullable();
			$table->string('mobile')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->unique();
			$table->string('email2')->nullable();
			$table->string('url')->nullable();
			$table->string('logo')->nullable();
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
        Schema::dropIfExists('emprofiles');
    }
}
