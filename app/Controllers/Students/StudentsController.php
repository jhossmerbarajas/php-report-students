<?php 

namespace App\Controllers\Students;

use App\Models\Students;

class StudentsController
{
	function index () {
		$studients = new Studients;
		print_r($studients->all());
	}
}