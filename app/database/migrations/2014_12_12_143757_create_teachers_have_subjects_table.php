<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersHaveSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers_have_subjects', function($table)
        {
        	$table->string('teacher_id');
        	$table->string('subject_id');
        	$table->primary(array('teacher_id', 'subject_id'));
        	$table->foreign('teacher_id')->references('mem_id')->on('teachers');
        	$table->foreign('subject_id')->references('id')->on('subjects');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('teachers_have_subjects');
	}

}
