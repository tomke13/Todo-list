<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController.php extends Controller
{
    public function index(){
    	$tasks = Task::latest('date_for')->get();

    	//return view('index', compact('tasks'));
    }
}
