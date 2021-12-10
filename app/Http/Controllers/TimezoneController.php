<?php

namespace App\Http\Controllers;

use App\Models\Timezone;
use App\Http\Requests\StoreTimezoneRequest;
use App\Http\Requests\UpdateTimezoneRequest;

class TimezoneController extends Controller
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
     * @param  \App\Http\Requests\StoreTimezoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimezoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timezone  $timezone
     * @return \Illuminate\Http\Response
     */
    public function show(Timezone $timezone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timezone  $timezone
     * @return \Illuminate\Http\Response
     */
    public function edit(Timezone $timezone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimezoneRequest  $request
     * @param  \App\Models\Timezone  $timezone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimezoneRequest $request, Timezone $timezone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timezone  $timezone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timezone $timezone)
    {
        //
    }
}
