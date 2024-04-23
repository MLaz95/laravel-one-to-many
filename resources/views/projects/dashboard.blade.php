@extends('layouts.app')

@section('content')
    <a href="{{ route('projects.create') }}" class="btn btn-primary my-2 float-end">Add a Project</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-capitalize">
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">type</th>
                <th scope="col">tech</th>
                <th scope="col">github</th>
                <th scope="col">buttons</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row" class="text-capitalize">{{ $project->name }}</th>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->type?->title }}</td>
                    <td>{{ $project->tech }}</td>
                    <td>{{ $project->github }}</td>
                    <td >
                        <div class="h-100 d-flex flex-column gap-3">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure you wish to remove this project from
                        the portfolio?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Go
                        Back</button>

                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
