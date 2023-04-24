<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;

class projectController extends Controller
{
    public function index()
    {

        $projects = Project::with('category')->get();

        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {

        $project = Project::find($id);
        
        return view('projects.project', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        

        

        return redirect('/projects');
    }
}
