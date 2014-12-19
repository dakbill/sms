<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsHaveSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students_have_subjects', function($table)
        {
        	$table->string('student_id');
        	$table->string('subject_id');
        	$table->primary(array('student_id', 'subject_id'));
        	$table->foreign('student_id')->references('mem_id')->on('students');
        	$table->foreign('subject_id')->references('id')->on('subjects');
			$table->string('class_score');
			$table->string('exam_score');
			$table->string('term');
			$table->string('grade');
        });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('students_have_subjects');
	}

}
