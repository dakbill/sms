<?php


class Guardian extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parents';
    protected $primaryKey = 'mem_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static function get_all(){

		$parents = DB::table('users')
        		 ->join('parents', 'users.mem_id', '=', 'parents.mem_id')
        		 ->select('users.mem_id','users.name')
        		 ->get();
        return $parents;
	}
    

}
