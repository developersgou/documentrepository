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
            $table->id();
            $table->text('token');
            $table->text('email')->unique();
            $table->text('password');
            $table->text('remember_token')->nullable();
            $table->text('user_name');
            $table->bigInteger('user_mobile')->unique();
            $table->tinyInteger('role');
            $table->Integer('email_verified')->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger("status");
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
