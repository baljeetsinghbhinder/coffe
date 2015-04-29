<?php

class NewScaff extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = 'NewScaffs';
 	public static $unguarded = true;
        /* primary key */
    protected $primaryKey = 'id';
        

	// Don't forget to fill this array
	protected $fillable = [];

}