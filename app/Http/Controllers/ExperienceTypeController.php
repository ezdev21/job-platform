<?php

namespace App\Http\Controllers;

use App\Models\ExperienceType;
use App\Http\Requests\StoreExperienceTypeRequest;
use App\Http\Requests\UpdateExperienceTypeRequest;

class ExperienceTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreExperienceTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperienceTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperienceType  $experienceType
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceType $experienceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperienceType  $experienceType
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceType $experienceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExperienceTypeRequest  $request
     * @param  \App\Models\ExperienceType  $experienceType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperienceTypeRequest $request, ExperienceType $experienceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperienceType  $experienceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienceType $experienceType)
    {
        //
    }
}
