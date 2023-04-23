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
        
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'header' => 'required'
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('public/images');
            $project = new Project();
        
            $project->image = $imagePath;
            $project->title = $request->input('title');
            $project->description = $request->input('description');
            $project->category_id =$request->input('category_id');
            $project->header = $request->input('header');
            $project->save();
        }

        return redirect('/projects');
    }
}
