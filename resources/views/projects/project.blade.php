@extends('layout')

@section('contentSpace')

<div class="container my-5">
    <div class="col">
        <div class="row projectTitle" style="border-bottom: 1px solid #c0c0c0;">
            <h1>{{ ($project->title) }}</h1>
        </div>
        <div class="my-3 row justify-content-center">
            <img class="" style="width: 70%" src="{{ asset('storage/' . $project->image) }}" alt="Project Image">
        </div>
        <div class="row" style="border-top: 1px solid #c0c0c0;">
            <h5>{{ ($project->header) }}</h3>
        </div>
        <div class="row justify-content-center">
            <div class="mt-3" style="
            font-size: 20px;
            width: 700px;
            ">
                <p>{{ ($project->description) }}</p>
            </div>
        </div>
    </div>
</div>

@endsection