<?php

namespace App\Http\Controllers;
use App\Subject;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
     public function index()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }
}
