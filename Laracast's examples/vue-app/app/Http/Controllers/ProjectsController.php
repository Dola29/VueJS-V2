<?php

namespace App\Http\Controllers;

use App\Projects;

class ProjectsController extends Controller
{
    /**
     * Show the page to create a new project.
     */
    public function create()
    {
        return view('projects.create', [
            'projects' => Projects::all() 
        ]);
    }

    /**
     * Store a new project in the database.
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            "description" => 'required'
        ]); 

        Projects::forceCreate([
            'name' => request('name'),
            'description' => request('description')
        ]); 

        return ['message' => 'Project Created!'];
    }
}
