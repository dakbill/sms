<?php


class Teacher extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'teachers';
    protected $primaryKey = 'mem_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function subjects()
    {
        return $this->belongsToMany('Subject','teachers_have_subjects', 'teacher_id', 'subject_id');
    }

    public function students()
    {
        $students = DB::table('teachers')
        		 ->join('teachers_have_subjects', 'teachers.mem_id', '=', 'teachers_have_subjects.teacher_id')
        		 ->join('students_have_subjects', 'teachers_have_subjects.subject_id', '=', 'students_have_subjects.subject_id')
        		 ->select('class_score','exam_score','students_have_subjects.student_id','grade')->get();
        return $students;
    }
    

}