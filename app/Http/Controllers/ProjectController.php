<?php

namespace App\Http\Controllers;

use App\Models\Project; // Make sure to use your actual model here
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    public function add()
    {
        $project = new Project();
        $project->titel = 'mijn data';
        $project->save();

        return "Project added!";
    }
}