<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('jname');
            $table->string('jtype');
            $table->text('jimage');             
            $table->longText('jdescription');
            $table->longText('jrequirements');
            $table->text('jaddress'); 
            $table->integer('jsalary_min'); 
            $table->integer('jsalary_max'); 
            $table->date('jdeadline')->nullable();
            $table->string('jexperience'); 
            $table->boolean('jstatus')->default('0'); 
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
