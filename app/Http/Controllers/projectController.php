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
        return Project::find($id);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function lol()
    {
        return view('projects.lol');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title',
            'description',
            'header'
        ]);

        $project = new Project();

        $project->image = request('image')->store('uploads', 'public');
        $project->title = request('title');
        $project->description = request('description');
        $project->header = request('header');

        $project->save();



        return redirect('/projects');
    }
}
