<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$api = Api::orderBy('created_at', 'DESC')->get();
        //return view('api.proApis', compact('api'));
        return view('api.proApis');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Api $Api)
    {
        //
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
