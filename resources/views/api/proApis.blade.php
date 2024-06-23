@extends('layouts.app')
  
@section('title', 'Detail Apis')
  
@section('content')
    <hr />
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-start">
                <h6 class="m-0 font-weight-bold text-primary">Add API/URL's</h6>
            </div>
            <div class="float-end">
                <a href="{{ route('profile.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 271px;">Profile Name</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 403px;">URL's</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 199px;">Endpoints</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 101px;">Created</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 189px;">Updated</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 171px;">Action</th></tr>
                    </thead>
                    {{-- <tfoot>
                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                    </tfoot> --}}
                    <tbody class="bg-dark">
                    <tr class="odd">
                            <td>Profile Name</td>
                            <td>URL's</td>
                            <td>Endpoints</td>
                            <td>Created</td>
                            <td>Updated</td>
                            <td>
                                <button class="btn btn-primary text-white-100"><i class="fa fa-eye" ></i></button>
                                <button class="btn btn-success text-white-100"><i class="fa fa-edit" ></i></button>
                                <button class="btn btn-danger text-white-100"><i class="fa fa-trash" ></i></button>
                            </td>
                        </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div> --}}
@endsection

<table class="table table-striped table-bordered">
    @if($profile->count() > 0)
    <thead>
        <tr>
            <th colspan="4">Name <label for="" class="p-2"><i class="fa fa-user fa-fw"></i></label></th>
        </tr>
    </thead>
    <tbody>
        <tr>                
            {{-- <td>{{ $loop->iteration }}</td> --}}
            <td class="align-middle">
                @foreach (json_decode($profile->name, true) as $i=> $name)
                    @if($name != '' && $i == 'f-name' || $i == 'm-name' || $i == 'l-name')
                        {{ $name }}
                    @endif
                @endforeach
            </td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th>Primary Email <i class="fa fa-envelope fa-fw"></i></th>
            <th>Secondary Email <i class="fa fa-envelope fa-fw"></i></th>
            <th> Primary Mobile <i class="fa fa-phone fa-fw"></i></th>
            <th> Secondary Mobile <i class="fa fa-phone fa-fw"></i></th>
        </tr>
    </thead>
    <tbody>
        
  
        {{-- @foreach($profile as $rss) --}}
            <tr>
                @foreach (json_decode($profile->email, true) as $i => $email)
                    @if($email != '' && $i == 'p-email')
                    <td class="align-middle">{{ $email }}</td>
                    @endif
                    @if($email == '' && $i == 'p-email' )
                    <td class="align-middle"></td>
                    @endif
                    @if($email != '' && $i == 's-email' )
                    <td class="align-middle">{{ $email }}</td>
                    @endif
                    @if($email == '' && $i == 's-email' )
                    <td class="align-middle"></td>
                    @endif
                @endforeach
                <td class="align-middle"> {{  $profile->phone_one }} </td>
                <td class="align-middle"> {{  $profile->phone_two }} </td>
            </tr>
        {{-- @endforeach --}}
    
    </tbody>
    <thead>
        <tr>
            <th> Education <i class="fas fa-graduation-cap"></i></th>
            <th> Country <i class="fas fa-globe"></i></th>
            <th> Job Name <i class="fas fa-briefcase"></i></th>
            <th> Company Name <i class="far fa-building"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach (json_decode($profile->otherinfo, true) as $i => $otherinfos)
                @if($otherinfos != '' && $i == 'country')
                    <td class="align-middle">{{ $otherinfos }}</td>
                @endif
                @if($otherinfos == '' && $i == 'country')
                    <td class="align-middle"></td>
                @endif
                @if($otherinfos != '' && $i == 'last-education')
                    <td class="align-middle">{{ $otherinfos }}</td>
                @endif
                @if($otherinfos == '' && $i == 'last-education')
                    <td class="align-middle"></td>
                @endif
                @if($otherinfos != '' && $i == 'job-name')
                    <td class="align-middle">{{ $otherinfos }}</td>
                @endif
                @if($otherinfos == '' && $i == 'job-name')
                    <td class="align-middle"></td>
                @endif
                @if($otherinfos != '' && $i == 'company-name')
                <td class="align-middle">{{ $otherinfos }}</td>
                @endif
                @if($otherinfos == '' && $i == 'company-name')
                    <td class="align-middle"></td>
                @endif
            @endforeach
        </tr>
    </tbody>
    <thead>
        <tr>
            <th> Primary Address <i class="fa fa-map-marker fa-fw"></i></th>
            <th> Secondary Address <i class="fa fa-map-marker fa-fw"></i></th>
            <th> Gender <i class="far fa-building"></i></th>
            <th> Link List <i class="fa fa-external-link fa-fw"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="align-middle">
                @foreach (json_decode($profile->address, true) as $i => $address)
                    @if($address != '' && $i == 'p-address')
                        {{ $address }},
                    @endif
                @endforeach
            </td>
            <td class="align-middle">
                @foreach (json_decode($profile->address, true) as $i => $address)
                    @if($address != '' && $i == 's-address')
                        {{ $address }},
                    @endif
                @endforeach
            </td>
            @if( $profile->gender == 'm')
            <td class="align-middle"> Male</td>
            @elseif( $profile->gender == 'f')
            <td class="align-middle"> Male</td>
            @elseif( $profile->gender == 'o')
            <td class="align-middle"> Other</td>
            @endif
            <td class="align-middle">{{ $profile->links }}</td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th> ACHIEVE WORKING AND KNOWLEDGE <i class="fa fa-map-marker fa-fw"></i></th>
            <th> WORK EXPERIENCE <i class="fa fa-th-list fa-fw"></i></th>
            <th> EDUCATION & QUALIFICATIONS <i class="fa fa-th-list fa-fw"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="align-middle"> {!! $profile->basicinfo !!}</td>  
            <td class="align-middle"> {!! $profile->workExp !!}</td>  
            <td class="align-middle"> {!! $profile->education !!}</td>  
        </tr>
    </tbody>
    @else
        <tr>
            <td class="text-center" colspan="5">profile not found</td>
        </tr>
    @endif
    <tfoot>

    </tfoot>
</table>