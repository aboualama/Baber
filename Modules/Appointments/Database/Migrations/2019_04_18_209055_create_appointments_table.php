<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('service_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->boolean('status');
            $table->unsignedBigInteger('payment_id');
            $table->decimal('amount');
            $table->foreign('client_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');  
            $table->foreign('worker_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');  
            $table->foreign('service_id')->references('id')->on('services')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');  
            $table->foreign('payment_id')->references('id')->on('payments')
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
        Schema::dropIfExists('appointments');
    }
}
