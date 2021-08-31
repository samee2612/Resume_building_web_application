<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //General info
            $table->string('name');
            $table->string('city');
            $table->string('email');
            $table->string('tel');
            $table->string('git');
            $table->string('linked');
            $table->longText('aboutme');
            $table->string('user_image');
            
            //Education
            $table->string('edu1');
            $table->string('institute');
            $table->string('uni');
            $table->string('cgpa');
            $table->string('year');

            //Academic Projects
            $table->string('domain1');
            $table->integer('sem');
            $table->string('proj');
            $table->longText('des');

            //Internship
            $table->string('domain');
            $table->string('duration');
            $table->string('role');
            $table->longText('elab');

            //Technical skills
            $table->json('choice');//for array 
            
            //Languages
            $table->json('lang');//for array 

            //Template
            $table->string('temp');
            
            
          


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume');
    }
}
