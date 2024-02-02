<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.addprojects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.addprojects.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titel' => 'required|max:255', // Assuming 'titel' is the correct field name
            'description' => 'required', // Validate and sanitize input data
        ]);

        $project = new Project();
        $project->titel = $validatedData['titel'];
        $project->description = $validatedData['description'];
        $project->save(); // Save the new project

        return redirect()->route('addprojects.index'); // Redirect to the list of projects
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'titel' => 'required|max:255',
            'description' => 'required',
        ]);

        $project->titel = $validatedData['titel'];
        $project->description = $validatedData['description'];
        $project->save(); // Update the project

        return redirect()->route('addprojects.index'); // Redirect back to the list
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Remove the dd($project); line after confirming it's working

        $project->delete();

        return redirect()->route('addprojects.index')
            ->with('success', 'Project deleted successfully.');
    }
}