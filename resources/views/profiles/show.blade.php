@extends('layouts.app')
  
@section('title', 'Show Profile')
  
@section('content')
    <h5 class="mb-0">Detail Profile</h5>
    <hr />
    <div class="row">

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

        {{-- <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $profile->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $profile->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $profile->phone_one }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $profile->education }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $profile->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $profile->updated_at }}" readonly>
        </div>
    </div> --}}
@endsection