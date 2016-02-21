<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    public function index(){
    	$projects = Project::latest('published_at')->take(4)->get(); // get latest 4 projects
    	$tasks = Task::latest('date_for')->get();

    	return view('index', compact('projects'), compact('tasks'));
    }

    public function all(){ // get all projects
    	$projects = Project::latest('published_at')->get(); 

    	return view('projects.projects', compact('projects'));
    }

    public function show($id){
    	$project = Project::findOrFail($id);
    	$tasks = Task::latest('date_for')->where('id_project', $id)->get();

    	return view('projects.project', compact('project'), compact('tasks'));
    }

    public function add(){ // Add a new project
    	return view('projects.add');

    }
    
}
