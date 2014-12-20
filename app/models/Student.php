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
    public static function num_of_boys()
    {
        $num_of_boys = DB::table('students')
        		 ->join('users', 'students.mem_id', '=', 'users.mem_id')
        		 ->where('gender', '=', 'male')
        		 ->count();
        return $num_of_boys;
    }
    public static function num_of_girls()
    {
        $num_of_girls = DB::table('students')
        		 ->join('users', 'students.mem_id', '=', 'users.mem_id')
        		 ->where('gender', '=', 'female')
        		 ->count();
        return $num_of_girls;
    }

}
