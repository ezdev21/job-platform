<?php

namespace App\Http\Controllers;

use App\Models\ProjectLength;
use App\Http\Requests\StoreProjectLengthRequest;
use App\Http\Requests\UpdateProjectLengthRequest;

class ProjectLengthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProjectLengthRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectLengthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectLength  $projectLength
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectLength $projectLength)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectLength  $projectLength
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectLength $projectLength)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectLengthRequest  $request
     * @param  \App\Models\ProjectLength  $projectLength
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectLengthRequest $request, ProjectLength $projectLength)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectLength  $projectLength
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectLength $projectLength)
    {
        //
    }
}
