<?php 

use App\Core\Router;
use App\Controllers\Students\StudentsController;

Router::get("/", [StudentsController::class, 'index']);

Router::dispatch();