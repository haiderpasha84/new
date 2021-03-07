<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobRequests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('set null');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('title');
            $table->string('state');
            $table->string('location');
            $table->string('photo')->nullable();
            $table->string('skills');
            $table->string('content');
            $table->rememberToken();
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
        Schema::dropIfExists('JobRequests');
    }
}
