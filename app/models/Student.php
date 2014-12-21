<?php


class Student extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';
    protected $primaryKey = 'mem_id';
    protected $fillable = array('mem_id','class');
    public $timestamps = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


	public function subjects()
    {
        return $this->belongsToMany('Subject','students_have_subjects', 'student_id', 'subject_id');
    }
    public static function population_by_gender()
    {
        $pop_by_gender = DB::table('students')
                 ->join('users', 'students.mem_id', '=', 'users.mem_id')
                 ->select(DB::raw('count(*) as gender_count, gender'))
                 ->groupBy('gender')
                 ->get();
        return $pop_by_gender;
    }
    

}
