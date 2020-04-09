<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class TitleController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Title::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $employee)
    {
        $title = employee->titles()->where('to_date', '>', 'hire_date')
                                   ->update(['to_date'=> date_format(now(), 'Y-m-d']=;
                                   
        $new_title = new Title();
        $new_title->emp_no = $employee->emp_no;
        $new_title->title = $request->title;
        $new_title->from_date = date_format(now(), 'Y-m-d');
        $new_title->to_date = '9999-01-01';
        $new_title->save();
        return $new_title;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee, $title)
    {
        return $employee->titles()->orderBy('to_date', 'desc')->skip($title);
    }

    /**
     * current : return current title for a given employee
     *
     * @param  \App\Employee  $employee
     * @return Title
     */
    public function current(Employee $employee)
    {
        return $employee->titles()->orderBy('to_date', 'desc')->first();
    }

