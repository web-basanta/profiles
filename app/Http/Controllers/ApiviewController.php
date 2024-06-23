<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Models\Profiles;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Str;

class ApiviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $key;

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-profile|edit-profile|delete-profile', ['only' => ['index','show']]);
       $this->middleware('permission:create-profile', ['only' => ['create','store']]);
       $this->middleware('permission:edit-profile', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-profile', ['only' => ['destroy']]);
       $this->key = (string) Str::uuid(); // Generate UUID key
    }
    public function index()
    {
        //
        //$api = Api::orderBy('created_at', 'DESC')->get();
        //return view('api.proApis', compact('api'));
        return view('api.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profile = Profiles::orderBy('created_at', 'DESC')->get();
        // Generate a unique key for UI selection
        $key = (string) Str::uuid();
        $url = url('/');
        //$name = $profile->name;

        // Loop through each profile and add the key
        $profile->each(function ($profile) use ($key, $url) {
            $nameObject = json_decode($profile->name);
            $fName = $nameObject->{'f-name'};
            $profile->key = $key;
            $profile->url = $url."/".$fName."/".$key;
        });
        return view('api.create', compact('profile'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api  $Api
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
       
        $profile = Profiles::findOrFail($id);
        $key = (string) Str::uuid();
        $url = [];
        //$name = $profile->name;
        $nameObject = json_decode($profile->name);
        $fName = $nameObject->{'f-name'};
        $url = url('/')."/".$fName."/".$key;
        
        $user_id = Api::where('user_id', $id)->get();
  
        if ($profile->user_id == Auth::id() || Role::select("id")->where("id", "=", Auth::id())->value('id') == '1') {
            if ($user_id->isNotEmpty() && $profile->user_id == $user_id) {
                return view('api.show', compact('profile'));
            }else{
                //return redirect()->route('api.create')->with('error', "Please Select and create that URL's");
                return view('api.edit', compact('profile', 'key', 'url'));
            }
        }else{
            return redirect()->route('dashboard')->with('error', 'You are not authorized to view this product.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $Api
     * @return \Illuminate\Http\Response
     */
    public function edit(Api $Api)
    {
        //
        if(!empty($Api)){
            //$profile = Profiles::all($id);
            $profile = Profiles::where('id', $Api)->orderBy('created_at', 'DESC')->get();
            // Generate a unique key for UI selection
            $key = (string) Str::uuid();
            $url = url('/');
            //$name = $profile->name;

            // Loop through each profile and add the key
            $profile->each(function ($profile) use ($key, $url) {
                $nameObject = json_decode($profile->name);
                $fName = $nameObject->{'f-name'};
                $profile->key = $key;
                $profile->url = $url."/".$fName."/".$key;
            });
            return view('api.edit', compact('profile'));
        } else {
            $profile = Profiles::orderBy('created_at', 'DESC')->get();
            // Generate a unique key for UI selection
            $key = (string) Str::uuid();
            $url = url('/');
            //$name = $profile->name;

            // Loop through each profile and add the key
            $profile->each(function ($profile) use ($key, $url) {
                $nameObject = json_decode($profile->name);
                $fName = $nameObject->{'f-name'};
                $profile->key = $key;
                $profile->url = $url."/".$fName."/".$key;
            });
            return view('api.edit', compact('profile'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Api  $Api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Api $Api)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api  $Api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Api $Api)
    {
        //
    }
}
