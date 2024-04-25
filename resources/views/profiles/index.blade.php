@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Profile List</div>
    <div class="card-body">
        @can('create-profile')
            <a href="{{ route('profiles.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New profile</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profiles as $profile)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->description }}</td>
                    <td>
                        <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-profile')
                                <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-profile')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this profile?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No profile Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $profiles->links() }}

    </div>
</div>
@endsection