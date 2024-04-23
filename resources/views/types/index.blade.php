@extends('layouts.app')

@section('content')
    <h1>All Categories</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr class="text-capitalize">
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">buttons</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td class="text-capitalize">{{ $type->title }}</td>
                    <td>
                        <div class="h-100 d-flex gap-3">
                            <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('types.create') }}" class="btn btn-primary">Add a new Type</a>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Are you sure you wish to remove this category?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Go
                        Back</button>

                    <form action="{{ route('types.destroy', $type->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
