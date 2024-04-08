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
            'p-one' => 'Please enter correct email address'
            // Add more custom messages for other rules as needed
        ];
        
        $validatedData = $request->validate([
            'f-name' => 'required|max:25',
            'l-name' => 'required|max:25',
            'p-email' => 'required|email|unique:profiles,email',
            'p-one' => 'required|min:11|numeric',
            's-two' => 'nullable',
            'gender'=>'required',
            'last-education' => 'nullable|string',
            'country' => 'nullable|string',
            'job-name' => 'nullable|string',
            'company-name' => 'nullable|string',
            'p-address' => 'nullable|string',
            's-address' => 'nullable|string',
            'gender' => 'nullable|string',
            'links' => 'nullable|string',
            'basicinfo' => 'nullable|string',
            'workExp' => 'nullable|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'interests' => 'nullable|string',
            'otherinfo' => 'nullable|string',
        ], $messages);
        Validator::make($request->all(), [
            'f-name' => 'required',
            'l-name' => 'required',
            'p-email' => 'required|email',
            'p-one' => 'required|min:11|numeric',
        ])->validate();
        //var_dump($request);
        //Profiles::create($request->all());
       
        // Validate input
        // $validatedData = $request->validate([
        //     'f-name' => 'required|string',
        //     'm-name' => 'nullable|string',
        //     'l-name' => 'required|string',
        //     'p-email' => 'required|email',
        //     's-email' => 'nullable|email',
        //     'p-one' => 'required|string',
        //     's-two' => 'nullable|string',
        //     'last-education' => 'nullable|string',
        //     'country' => 'nullable|string',
        //     'job-name' => 'nullable|string',
        //     'company-name' => 'nullable|string',
        //     'p-address' => 'nullable|string',
        //     's-address' => 'nullable|string',
        //     'gender' => 'nullable|string',
        //     'links' => 'nullable|string',
        //     'basicinfo' => 'nullable|string',
        //     'workExp' => 'nullable|string',
        //     'education' => 'nullable|string',
        //     'skills' => 'nullable|string',
        //     'interests' => 'nullable|string',
        //     'otherinfo' => 'nullable|string',
        // ]);

        // Create new instance of the model and fill it with validated data
        $post = Profiles::create([
            'name' => $validatedData['f-name']."".$validatedData['l-name'], // Adjust field name as needed
            'phone_one' => $validatedData['p-one'], // Adjust field name as needed
            'phone_two' => $validatedData['s-two'], // Adjust field name as needed
            'address' => $validatedData['p-address'], // Adjust field name as needed
            // Add more fields as needed
            'gender' => $validatedData['gender'],
            'links' => $validatedData['links'],
            'email' => $validatedData['p-email'],
            'basicinfo' => $validatedData['basicinfo'],
            'workExp' => $validatedData['workExp'],
            'education' => $validatedData['education'],
            'skills' => $validatedData['education'],
            'interests' => $validatedData['education'],
            'otherinfo' => $validatedData['education']
        ]);

        // Optionally, you can return a response or redirect
        //return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);

 
        return redirect()->route('profile')->with('success', 'New Profiles added successfully');
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
