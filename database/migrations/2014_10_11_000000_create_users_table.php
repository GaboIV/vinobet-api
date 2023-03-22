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
            $table->string('nick')->unique();
            $table->string('email')->unique();
            $table->boolean('status')->default(true);
            $table->integer('attemps')->default(5);
            $table->boolean('web')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('code_security');
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
