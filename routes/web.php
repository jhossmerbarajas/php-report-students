<?php 

use App\Core\Router;
use App\Controllers\Students\StudentsController;
use App\Controllers\Reports\ReportsController;

Router::get("/", [StudentsController::class, 'index']);

Router::get("/report-pdf", [ReportsController::class, 'pdf']);

Router::dispatch();