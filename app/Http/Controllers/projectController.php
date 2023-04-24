<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
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

        $projects = Project::with('category')->get();

        return view('projects.create', compact('projects'));
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

            
            $imagePath =  $request->file('image')->store('public/images');

            $imagePath = 'images/' . basename($imagePath);

            $project = new Project();

            $project->image = $imagePath;
            $project->title = $request->input('title');
            $project->description = $request->input('description');
            $project->category_id = $request->input('category_id');
            $project->header = $request->input('header');
            $project->save();
        }

        return redirect('/projects');
    }

    public function delete($id)
    {
        $project = Project::find($id);

        if ($project) {
            Storage::delete($project->image);
            $project->delete();
            return redirect()->back()->with('success', 'Project deleted successfully');
        }

        return redirect()->back()->with('error', 'Project not found');
    }
}
