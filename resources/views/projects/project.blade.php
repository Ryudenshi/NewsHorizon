@extends('layout')

@section('contentSpace')

<img src="{{ asset('storage/'.$project->image) }}" alt="Project Image">

<p>{{ ($project->title) }}</p>

<p>{{ ($project->description) }}</p>

@endsection