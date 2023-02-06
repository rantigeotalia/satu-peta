<?php

namespace App\Http\Controllers;

use App\Models\PublicService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public_service = PublicService::all();
        return view('public_services.index', compact('public_service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public_services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        PublicService::create($request->all());
        
        return redirect('/public_services')
                        ->with('message','Public Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublicService  $publicService
     * @return \Illuminate\Http\Response
     */
    public function show(PublicService $publicService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublicService  $publicService
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicService $public_service)
    {
        return view('public_services.edit', compact('public_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublicService  $publicService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicService $publicservice)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);
        $input = $request->all();
    
        $publicservice->update($input);
        
        return redirect('/public_services')
                        ->with('message','Public Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublicService  $publicService
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicService $publicservice)
    {
        $publicservice->delete();
        return redirect('/publicservices')
        ->with('message','Public Service deleted successfully.');
    }
}
