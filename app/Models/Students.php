<?php 

namespace App\Models;

use App\Core\Conexion;

class Students extends Conexion
{
	protected $table = "students";
	protected $tableRelation = "courses";
}