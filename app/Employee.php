<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $primaryKey = "emp_no"; 
	public function departments() {
		return $this->belongsToMany('App\Department', 'dept_emp', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date'); 
	}
	public function managedDepartments() {
		return $this->belongsToMany('App\Department', 'dept_manager', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date'); 
	}
	public function salaries() {
		return $this->hasMany('App\Salary', 'emp_no'); 	
	}
	public function titles() {
		return $this->hasMany('App\Title', 'emp_no'); 	
	}
	public function salary() {
		return $this->hasOne('App\Salary', 'emp_no')->where('to_date', '>=', NOW());
	}
	public function title() {
		return $this->hasOne('App\Title', 'emp_no')->where('to_date', '>=', NOW());
	}
	public function department() {
		return $this->belongsToMany('App\Department', 'emp_no')->where('to_date', '>=', NOW());
	}

}
