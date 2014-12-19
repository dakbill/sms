<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsHaveStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents_have_students', function($table)
        {
        	$table->string('student_id');
        	$table->string('parent_id');
        	$table->primary(array('student_id', 'parent_id'));
        	$table->foreign('student_id')->references('mem_id')->on('students');
        	$table->foreign('parent_id')->references('mem_id')->on('parents');
			$table->string('ward_relation');
        });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('parents_have_students');
	}

}
