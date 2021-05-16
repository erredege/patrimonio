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
            $table->string('name');
<<<<<<< HEAD
            $table->string('email')->unique();
=======
            $table->string('email',200)->unique();
            $table->timestamp('email_verified_at')->nullable();
>>>>>>> 3b46abc1812116512aeb17131d2c14a0d4c3013a
            $table->string('password');
            $table->integer('type');
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
