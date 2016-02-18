<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    public function index(){
    	$projects = Project::latest('published_at')->get();

    	return view('index', compact('projects'));
    }

    public function show($id){
    	$project = Project::findOrFail($id);

    	return view('projects.project', compact('project'));
    }
}
