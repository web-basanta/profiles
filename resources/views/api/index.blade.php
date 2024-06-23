@extends('layouts.app')
  
@section('title', 'Home URL')
  
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="mb-0">List URL/API's</h5>
            <a href="{{ route('api.create', null) }}" class="btn btn-primary">Add API/URL</a>
        </div>
        <hr />
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card-body">
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th class="col-sm-1">Profile Name</th>
                <th class="col-sm-1">URL's</th>
                <th class="col-sm-1">Endpoints</th>
                <th class="col-sm-1">Created</th>
                <th class="col-sm-1">Updated</th>
                <th class="col-sm-1">Action</th>
            </tr>
        </thead>
        <tbody>+
            {{-- @if($profile->count() > 0)
          
                @foreach($profile as $rs)
                    <tr>                
                        <td class="col-sm-1">{{ $loop->iteration }}</td>
                        <td class="col-sm-1 align-middle">
                            @foreach (json_decode($rs->name, true) as $i=> $name)
                                @if($name != '' && $i == 'f-name' || $i == 'm-name' || $i == 'l-name')
                                    {{ $name }}
                                @endif
                            @endforeach
                        </td>
                        <td class="col-sm-2 align-middle">
                            @foreach (json_decode($rs->address, true) as $i => $address)
                                @if($address != '' && $i == 'p-address' || $i == 's-address')
                                    {{ $address }},
                                @endif
                            @endforeach
                        </td>
                        <td class="col-sm-2 align-middle">
                            @foreach (json_decode($rs->email, true) as $i => $email)
                                @if($email != '' && $i == 'p-email')
                                    {{ 'Primary Email:'}}{{ $email }}<br>,
                                @endif
                                @if($email != '' && $i == 's-email')
                                    {{ 'Secondary Email:'}}{{ $email }},
                                @endif
                            @endforeach
                        </td>
                        <td class="col-sm-1 align-middle"> {!! $rs->education !!}</td>  
                        <td class="col-sm-3 align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#" type="button" class="btn btn-success"> <i class="fas fa-sync-alt" ></i> </a>
                                <a href="{{ route('api.index', $rs->id) }}" type="button" class="btn btn-primary">API/URL</a>
                                <a href="{{ route('profile.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('profile.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('profile.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
            @endif --}}
        </tbody>
    </table>
    </div>
@endsection