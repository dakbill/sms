<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table)
        {
            $table->string('mem_id');
            $table->primary('mem_id');
            $table->string('password');
            $table->string('phone');
            $table->string('email');
            $table->string('name');
            $table->string('avatar');
            $table->string('nationality');
            $table->enum('gender', array('male', 'female'));
            $table->enum('role', array('admin', 'guardian', 'accountant','teacher', 'student'));
            $table->date('dob');
            $table->timestamps();
            $table->rememberToken();
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
