<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get(); //databse query to get all projects from the database

        return view('admin.projects.index', ["projects" => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); //dump and die the request data to see what is being sent to the server


        $validate = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'live_url' => 'nullable|url',
            'github_url' => 'nullable|url', 
        ]);


        if(request()->hasFile('image')){
            $validate['image'] = $request->file('image')->store('projects', 'public'); //store the image in the public storage and return the path
        }

        
        Project::create($validate);



        return redirect('/admin/projects')->with('success', 'Project created successfully!'); //redirect to the projects index page with a success message
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
