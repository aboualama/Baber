<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('working_hours', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamps(); 
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('days', array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'));
            
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hours');
    }
}
