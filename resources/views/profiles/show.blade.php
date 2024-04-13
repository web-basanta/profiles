@extends('layouts.app')
  
@section('title', 'Show Profile')
  
@section('contents')
    <h1 class="mb-0">Detail Profile</h1>
    <hr />
    <div class="row">

        <table class="table table-striped table-bordered">
            @if($profile->count() > 0)
            <thead>
                <tr>
                    <th>Name</th>
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
                    <th>Primary Email</th>
                    <th>Secondary Email</th>
                    <th> Primary Mobile </th>
                    <th> Secondary Mobile </th>
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
                    <th> Education </th>
                    <th> Country </th>
                    <th> Job Name </th>
                    <th> Company Name </th>
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
                    <th> Primary Address </th>
                    <th> Secondary Address </th>
                    <th> Gender </th>
                    <th> Link List </th>
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
                    <th> ACHIEVE WORKING AND KNOWLEDGE </th>
                    <th> WORK EXPERIENCE </th>
                    <th> EDUCATION & QUALIFICATIONS </th>
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