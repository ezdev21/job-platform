<?php

namespace App\Http\Controllers;

use App\Models\JobType;
use App\Http\Requests\StoreJobTypeRequest;
use App\Http\Requests\UpdateJobTypeRequest;

class JobTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreJobTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function edit(JobType $jobType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobTypeRequest  $request
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobTypeRequest $request, JobType $jobType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobType  $jobType
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobType $jobType)
    {
        //
    }
}
