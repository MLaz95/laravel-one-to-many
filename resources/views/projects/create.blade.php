@extends('layouts.app')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label text-capitalize">Project Name</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label  text-capitalize">description</label>
            <textarea type="password" class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label text-capitalize">cover</label>
            <input type="file" class="form-control @error('cover') is-invalid @enderror" value="{{old('cover')}}" name="cover">
            @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tech" class="form-label text-capitalize">tech</label>
            <input type="text" class="form-control @error('tech') is-invalid @enderror" value="{{old('tech')}}" name="tech">
            @error('tech')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="github" class="form-label text-capitalize">github</label>
            <input type="text" class="form-control @error('github') is-invalid @enderror" value="{{old('github')}}" name="github">
            @error('github')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
