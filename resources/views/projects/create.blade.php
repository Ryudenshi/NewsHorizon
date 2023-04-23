@extends('layout')

@section('contentSpace')

<div class="container my-5">
    <div class="row relative flex items-center min-h-screen justify-content-center overflow-hidden">
        <div class="relative flex items-center min-h-screen justify-content-center overflow-hidden col-md-6 border">
            <form action="/NewsHorizon/public/projects" method="POST" class="shadow p-12" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Add new article</h3>
                <div class="my-2">
                    <input type="text" name="title" placeholder="title">
                </div>
                <div class="my-2">
                    <textarea type="text" name="header" placeholder="header"></textarea>
                </div>
                <div class="my-2">
                    <textarea type="text" name="description" placeholder="description"></textarea>
                </div>
                <div class="my-2">
                    <input type="integer" name="category_id" placeholder="enter category id">
                </div>
                <div class="my-2">
                    <label class="block mb-4 ">
                        <span class="sr-only">Choose File</span>
                        <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        @error('image')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </label>
                    <div>
                        <button type="submit" class="px-4 py-2 text-sm text-black bg-indigo-600 rounded">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="relative flex items-center min-h-screen justify-content-center overflow-hidden col-md-3 border">
            <form action="/projects" method="POST" class="shadow p-12" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Add new category</h3>
                <div class="py-3">
                    <input type="text" name="name" placeholder="name">
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 text-sm text-black bg-indigo-600 rounded">Add</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection