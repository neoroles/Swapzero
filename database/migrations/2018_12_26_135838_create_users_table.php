<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email',191)->unique();
            $table->string('password');
             $table->string('plan')->default("Free");
			 $table->date('start_plan')->nullable();
			 $table->date('end_plan')->nullable();
              $table->text('vk')->nullable();
              $table->text('tg')->nullable();
              $table->integer('cashalltime')->default(0);
              $table->float('rep', 7, 2)->default(0); ;
              
             $table->boolean('activated')->default(0); 
             $table->boolean('identified')->default(0); 
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
        Schema::dropIfExists('users');
    }
}
