@extends('layouts.app')
  
@section('title', 'Create profile')
  
@section('content')
<div class="container">
    <span class="mb-0">Add API/URL</span>
    <hr />
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                Add New API/URL's
            </div>
            <div class="float-end">
                <a href="{{ route('api.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('api.create') }}" method="post">
                @csrf

                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">API title</label>
                    <div class="col-md-6">
                      <input type="text" placeholder="API Name" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Select Profile</label>
                    <div class="col-md-6">
                        <select name="p_id" id="" placeholder="API Name" class="form-control @error('p_id') is-invalid @enderror" id="title" name="title" value="{{ old('p_id') }}" disabled>
                            <option value="">Select Profile</option>
                             <option value="{{ $profile->id }}" selected>
                                @foreach (json_decode($profile->name, true) as $i=> $name)
                                    @if($name != '' && $i == 'f-name')
                                        {{ $name }}
                                    @endif
                                    @if($name != '' && $i == 'm-name')
                                        {{ $name }}
                                    @endif
                                    @if($name != '' && $i == 'l-name')
                                        {{ $name }}
                                    @endif
                                    @endforeach
                                </option>
                        </select>
                      {{-- <input type="text" placeholder="API Name" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif --}}
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">profile_url</label>
                    <div class="col-md-6">
                        <input type="text" name="profile_url" class="form-control @error('profile_url') is-invalid @enderror" placeholder="Profile_url" value="{{$url}}" readonly>
                        @if ($errors->has('profile_url'))
                            <span class="text-danger">{{ $errors->first('profile_url') }}</span>
                        @endif
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">API KAY</label>
                    <div class="col-md-6">
                        <input type="text" name="api_kay" class="form-control @error('api_key') is-invalid @enderror" placeholder="API KEY" value="{{$key}}" readonly>
                        @if ($errors->has('api_kay'))
                            <span class="text-danger">{{ $errors->first('api_kay') }}</span>
                        @endif
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                    <div class="col-md-6">
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Product Description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                
                <div class="mb-3 row">
                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add API/URL">
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection