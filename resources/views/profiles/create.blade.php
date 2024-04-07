@extends('layouts.app')
  
@section('title', 'Create profile')
  
@section('contents')
    <span class="mb-0">Add profile</span>
    <hr />
    <form action="{{ route('profiles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-head">
                <h4 class="text-center pt-2">Basic Details</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="" class="card text-center p-2"><i class="fa fa-user fa-fw"></i></label>
                    <div class="col">
                        <input type="text" name="f-name" class="form-control @error('f-name')is-invalid @enderror" placeholder="Frist Name">
                        @if ($errors->has('f-name'))
                            <span class="invalid-feedback">{{ $errors->first('f-name') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <input type="text" name="m-name" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="col">
                        <input type="text" name="l-name" class="form-control @error('l-name')is-invalid @enderror" placeholder="Last Name">
                        @if ($errors->has('l-name'))
                            <span class="invalid-feedback">{{ $errors->first('l-name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2"><i class="fa fa-envelope fa-fw"></i></label>
                    <div class="col">
                        <input type="text" name="p-email" class="form-control  @error('p-email')is-invalid @enderror" placeholder="Primary Email ">
                        @if ($errors->has('p-email'))
                            <span class="invalid-feedback">{{ $errors->first('p-email') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <input type="text" name="s-email" class="form-control" placeholder="Secondary Email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2"><i class="fa fa-phone fa-fw"></i></label>
                    <div class="col">
                        <input type="text" name="p-one" class="form-control  @error('p-one')is-invalid @enderror" placeholder="Primary Mobile ">
                        @if ($errors->has('p-one'))
                            <span class="invalid-feedback">{{ $errors->first('p-one') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <input type="text" name="s-two" class="form-control" placeholder="Secondary Mobile">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2"><i class="fas fa-graduation-cap"></i></label>
                    <div class="col">
                        <input type="text" name="last-education" class="form-control" placeholder="Education">
                    </div>
                    <label for="" class="card text-center p-2"><i class="fas fa-globe"></i></label>
                    <div class="col">
                        <input type="text" name="country" class="form-control" placeholder="Enter Your Country Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2"><i class="fas fa-briefcase"></i></label>
                    <div class="col">
                        <input type="text" name="job-name" class="form-control" placeholder="Job Name">
                    </div>
                    <label for="" class="card text-center p-2"><i class="far fa-building"></i></label>
                    <div class="col">
                        <input type="text" name="company-name" class="form-control" placeholder="Company Name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-map-marker fa-fw"></i></label>
                    <div class="col">
                        <textarea name="p-address" class="form-control" placeholder="Primary Address"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="s-address" class="form-control" placeholder="Secondary Address"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-intersex fa-fw"></i></label>
                    <div class="col">
                        <select name="gender" class="custom-select" multiple>
                            <option value="f">Female</option>
                            <option value="m">Male</option>
                            <option value="o">Others</option>
                        </select>
                    </div>
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-external-link fa-fw"></i></label>
                    <div class="col">
                        <div class="col">
                            <textarea class="form-control" name="links" placeholder="links"></textarea>
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
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-th-list fa-fw"></i></label>
                    <div class="col">
                        <textarea name="basicinfo" id="editor" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-head">
                <h4 class="text-center pt-2">WORK EXPERIENCE</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-th-list fa-fw"></i></label>
                    <div class="col">
                        <textarea name="workExp" id="editor-two" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-head">
                <h4 class="text-center pt-2">EDUCATION & QUALIFICATIONS</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="" class="card text-center p-2 h-25"><i class="fa fa-th-list fa-fw"></i></label>
                    <div class="col">
                        <textarea name="education" id="editor-three" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row mb-3">
                    <div class="d-grid text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection