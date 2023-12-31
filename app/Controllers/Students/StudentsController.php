<?php 

namespace App\Controllers\Students;

use App\Controllers\Controller;
use App\Models\Students;

class StudentsController extends Controller
{
	function index () {
		$student = new Students;
		$students = $student->joinAllStudentWithCourse()->get();
		
		return $this->view("students.index", compact("students"));
	}
}