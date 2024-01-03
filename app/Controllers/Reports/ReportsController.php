<?php 

namespace App\Controllers\Reports;

use App\Controllers\Controller;
use App\Models\Students;

class ReportsController extends Controller
{
	function pdf() {
		$student = new Students;
		$students = $student->joinAllStudentWithCourse()->get();
		return $this->view("reports.students", compact("students"));
	}
}