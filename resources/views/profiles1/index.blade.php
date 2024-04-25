@extends('layouts.app')
  
@section('title', 'Home profile')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">List profile</h5>
        <a href="{{ route('profiles.create') }}" class="btn btn-primary">Add profile</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th>S. No</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Emails</th>
                <th>Some Info</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($profile->count() > 0)
          
                @foreach($profile as $rs)
                    <tr>                
                        <td>{{ $loop->iteration }}</td>
                        <td class="align-middle">
                            @foreach (json_decode($rs->name, true) as $i=> $name)
                                @if($name != '' && $i == 'f-name' || $i == 'm-name' || $i == 'l-name')
                                    {{ $name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="align-middle">
                            @foreach (json_decode($rs->address, true) as $i => $address)
                                @if($address != '' && $i == 'p-address' || $i == 's-address')
                                    {{ $address }},
                                @endif
                            @endforeach
                        </td>
                        <td class="align-middle">
                            @foreach (json_decode($rs->email, true) as $i => $email)
                                @if($email != '' && $i == 'p-email')
                                    {{ 'Primary Email:'}}{{ $email }}<br>,
                                @endif
                                @if($email != '' && $i == 's-email')
                                    {{ 'Secondary Email:'}}{{ $email }},
                                @endif
                            @endforeach
                        </td>
                        <td class="align-middle"> {!! $rs->education !!}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('profiles.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('profiles.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('profiles.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">profile not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection