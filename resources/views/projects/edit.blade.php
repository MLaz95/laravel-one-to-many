@extends('layouts.app')

@section('content')
    
    <form action="{{route('projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label text-capitalize">Project Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$project->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label  text-capitalize">description</label>
            <textarea type="password" class="form-control @error('description') is-invalid @enderror" name="description" >{{$project->description}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label text-capitalize">cover</label>
            <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" value="{{$project->cover}}">
            @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tech" class="form-label text-capitalize">tech</label>
            <input type="text" class="form-control @error('tech') is-invalid @enderror" name="tech" value="{{$project->tech}}">
            @error('tech')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="github" class="form-label text-capitalize">github</label>
            <input type="text" class="form-control @error('github') is-invalid @enderror" name="github" value="{{$project->github}}">
            @error('github')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('projects.index')}}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection