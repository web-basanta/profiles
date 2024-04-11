<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = Profiles::all();
        return view('profiles.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'f-name.required' => 'The first name field is required.',
            'f-name.max' => 'The first name may not be greater than :max characters.',
            'l-name.required' => 'The last name field is required.',
            'l-name.max' => 'The last name may not be greater than :max characters.',
            'p-email.required' => 'The email field is required.',
            'p-email.email' => 'The email must be a valid email address.',
            'p-email.unique' => 'The email has already been taken.',
            'p-one' => 'Please enter correct email address',
            'p-address.required' => 'The primary address field is required.'
            // Add more custom messages for other rules as needed
        ];
        
        $validatedData = $request->validate([
            'f-name' => 'required|max:25',
            'l-name' => 'required|max:25',
            'p-email' => 'required|email|unique:profiles,email',
            'p-one' => 'required|min:11|numeric',
            'gender'=>'required',
            'p-address' => 'required',
        ], $messages);
        Validator::make($request->all(), [
            'f-name' => 'required',
            'l-name' => 'required',
            'p-email' => 'required|email',
            'p-one' => 'required|min:11|numeric',
        ])->validate();

        $name_var = "['f-name'=>".$validatedData['f-name'].", 'm-name' =>". $request['m-name'].", 'l-name' =>". $validatedData['l-name']."]";
        $email_var = "['p-email' =>". $validatedData['p-email'].", 's-email' =>". $request['s-email']."]";

        // Create new instance of the model and fill it with validated data
        $profiles = Profiles::create([
            'name' => $name_var, // Adjust field name as needed
            'phone_one' => $validatedData['p-one'], // Adjust field name as needed
            'phone_two' => ($request['s-two'] == Null ?0:$request['s-two']), // Adjust field name as needed
            'address' => $validatedData['p-address'], // Adjust field name as needed
            // Add more fields as needed
            'gender' => $validatedData['gender'],
            'links' => $request['links'],
            'email' => $email_var,
            'basicinfo' => $request['basicinfo'],
            'workExp' => $request['workExp'],
            'education' => $request['education'],
            'skills' => $request['education'],
            'interests' => $request['education'],
            'otherinfo' => $request['education'],
        ]);

        if($profiles){
            return redirect()->route('profile')->with('success', 'New Profiles added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profiles $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiles $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profiles $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiles $profiles)
    {
        //
    }
}
