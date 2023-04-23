@extends('layout')

@section('contentSpace')

<div class="container my-5">
    <div class="col">
        <div class="row">
            <h1>{{ ($project->title) }}</h1>
        </div>
        <div class="row justify-content-center">
            <img class="projectImage" style="width: 70%" src="{{ asset('storage/'.$project->image) }}" alt="Project Image">
        </div>
        <div class="row">
            <h5>{{ ($project->header) }}</h3>
        </div>


        <p>{{ ($project->description) }}</p>
    </div>
</div>

@endsection