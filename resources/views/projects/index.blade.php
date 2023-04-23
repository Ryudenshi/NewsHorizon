@extends('layout')

@section('contentSpace')

<div class="container mt-2 newsSpace">
    @foreach ($projects as $project)
    <div class="newsItem">
        <div class="mx-1 row d-flex justify-content-end">
            <p>{{ ($project->updated_at) }}</p>
        </div>
        <div class="mx-2 d-inline-block">
            <h3>{{ ($project->category->name) }} | {{ ($project->title) }}</h3>
        </div>
        <div class="mx-1 my-2 row">
            <div class="col-md-5">
                <img src="{{ asset('storage/app/public/images' . $project->image) }}" alt="Project Image">
            </div>
            <div class="col-md-6">
                <h6 class="mb-3 d-flex">{{ ($project->header) }}</h6>
                <a class="readMore text-underline-offset-none" href="{{ route('projects.show', ['id' => $project->id]) }}">
                    Read more >
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection