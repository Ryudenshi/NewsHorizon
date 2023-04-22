@extends('layout')

@section('contentSpace')

<div class="container mt-2 newsSpace">
    @foreach ($projects as $project)
    <div class="newsItem">
        <div class="m-1">
            <p>{{ ($project->updated_at) }}</p>
        </div>
        <div class="m-2 d-inline-block">
            <h3>{{ ($project->category->name) }} | {{ ($project->title) }}</h3>
        </div>
        <div class="m-2">
            <h6>{{ ($project->header) }}</h6>
        </div>
        <div>
            <Button>
                <a href="/oneProject">Read more ></a>
            </Button>
        </div>
    </div>
    @endforeach
</div>


@endsection