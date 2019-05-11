<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable(); 
            $table->string('phone')->unique();                       
            
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('api_token')->unique();  
            $table->string('pin_code')->nullable();                  
 
            $table->unsignedBigInteger('city_id')->nullable();       
            $table->foreign('city_id')->references('id')->on('cities')
                        ->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('branch_id')->nullable();     
            $table->foreign('branch_id')->references('id')->on('branches')
                        ->onDelete('cascade')->onUpdate('cascade');

 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
