@extends('layouts.app')
  
@section('title', 'Create profile')
  
@section('content')
<div class="container">
    <span class="mb-0">Add profile</span>
    <hr />
    {{-- <form action="{{ route('profiles.store') }}" method="post" enctype="multipart/form-data"> --}}
        <form action="{{ route('profile.store') }}" method="post">
        @csrf
        
            <div class="card">
                <div class="card-head">
                    <h4 class="text-center pt-2">Basic Details</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3 my-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user fa-fw"></i></label></div>
                            </div>
                            <input type="text" name="f-name" class="form-control @error('f-name')is-invalid @enderror" placeholder="Frist Name" value="{{ old('f-name')}}">
                            @if ($errors->has('f-name'))
                                <span class="invalid-feedback">{{ $errors->first('f-name') }}</span>
                            @endif
                        </div>
                        </div>
                        <div class="col-sm-3 my-1">
                        <div class="input-group">
                            <input type="text" name="m-name" class="form-control" placeholder="Middle Name">
                        </div>
                        </div>
                        <div class="col-sm-3 my-1">
                        <div class="input-group">
                            <input type="text" name="l-name" class="form-control @error('l-name')is-invalid @enderror" placeholder="Last Name">
                            @if ($errors->has('l-name'))
                                <span class="invalid-feedback">{{ $errors->first('l-name') }}</span>
                            @endif
                        </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope fa-fw"></i></label></div>
                                </div>
                                <input type="text" name="p-email" class="form-control  @error('p-email')is-invalid @enderror" placeholder="Primary Email ">
                                @if ($errors->has('p-email'))
                                    <span class="invalid-feedback">{{ $errors->first('p-email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <input type="text" name="s-email" class="form-control" placeholder="Secondary Email">
                            </div>
                        </div>
                    
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-phone fa-fw"></i></label></div>
                                </div>
                                <input type="text" name="p-one" class="form-control  @error('p-one')is-invalid @enderror" placeholder="Primary Mobile ">
                                @if ($errors->has('p-one'))
                                    <span class="invalid-feedback">{{ $errors->first('p-one') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <input type="text" name="s-two" class="form-control @error('s-one')is-invalid @enderror" placeholder="Secondary Mobile">
                                @if ($errors->has('s-one'))
                                    <span class="invalid-feedback">{{ $errors->first('s-one') }}</span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-graduation-cap"></i></label></div>
                                </div>
                                <input type="text" name="last-education" class="form-control @error('last-education')is-invalid @enderror" placeholder="Education">
                                @if ($errors->has('last-education'))
                                    <span class="invalid-feedback">{{ $errors->first('last-education') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-globe"></i></label></div>
                                </div>
                                <input type="text" name="country" class="form-control" placeholder="Enter Your Country Name">
                            </div>
                        </div>
                        
                    {{-- </div>
                    <div class="row mb-3"> --}}
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-briefcase"></i></label></div>
                                </div>
                                <input type="text" name="job-name" class="form-control" placeholder="Job Name">
                            </div>
                        </div>
                        <div class="col-sm-3 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="far fa-building"></i></label></div>
                                </div>
                                <input type="text" name="company-name" class="form-control" placeholder="Company Name">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-map-marker fa-fw"></i></label></div>
                                </div>
                                <textarea name="p-address" rows="4" class="form-control @error('p-address')is-invalid @enderror" placeholder="Primary Address"></textarea>
                                @if ($errors->has('p-address'))
                                    <span class="invalid-feedback">{{ $errors->first('p-address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-map-marker fa-fw"></i></label></div>
                                </div>
                                <textarea name="s-address" rows="4" class="form-control"  placeholder="Secondary Address"></textarea>
                            </div>
                        </div>
                   
                        <div class="col-sm-4 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-gem fa-fw"></i></label></div>
                                </div>
                                <select name="gender" class="custom-select" multiple>
                                    <option value="f">Female</option>
                                    <option value="m" selected>Male</option>
                                    <option value="o">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 my-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-link fa-fw"></i></label></div>
                                </div>
                                <textarea class="form-control" name="links" rows="4" placeholder="links"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-head">
                    <h4 class="text-center pt-2">ACHIEVE WORKING AND KNOWLEDGE</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12 my-1">
                            <div class="input-group d-inline">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-th-list fa-fw"></i></div>
                                </div>
                                <textarea name="basicinfo" id="editor" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-head">
                    <h4 class="text-center pt-2">WORK EXPERIENCE</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12 my-1">
                            <div class="input-group d-inline">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-th-list fa-fw"></i></div>
                                </div>
                                <textarea name="workExp" id="editor-two" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-head">
                    <h4 class="text-center pt-2">EDUCATION & QUALIFICATIONS</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12 my-1">
                            <div class="input-group d-inline">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-th-list fa-fw"></i></div>
                                </div>
                                <textarea name="education" id="editor-three" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="d-grid justify-content-md-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </form>
</div>
@endsection