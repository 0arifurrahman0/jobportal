<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('seName')->nullable();
			$table->string('seFName')->nullable();
			$table->string('seMName')->nullable();
			$table->string('seBirthDate')->nullable();
			$table->enum('seGender',['Male','Femail','Other'])->nullable();
			$table->string('seReligion')->nullable();
			$table->enum('seMStatus',['Married','Unmarried','Single'])->nullable();
			$table->string('seNationality')->nullable();
			$table->string('seNationalId')->nullable();
			$table->string('sePresentAdd')->nullable();
			$table->string('sePermanentAdd')->nullable();
			$table->string('seMobile')->nullable()->unique();
			$table->string('seMobileAlt')->nullable();
			$table->string('seEmail')->unique()->nullable();
			$table->string('seEmailAlt')->nullable();
            $table->text('seObjective')->nullable();
            $table->text('seCareerSummary')->nullable();
            $table->text('seSpecialQualification')->nullable();
            $table->string('sePresentSalary')->nullable();
            $table->string('seExpectedSalary')->nullable();
            $table->string('seJobLevel')->nullable();
            $table->string('seAvailable')->nullable();
            $table->string('sePreferredCat')->nullable();
            $table->string('seInsideBd')->nullable();
            $table->string('seOutsideBd')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
