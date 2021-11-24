<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use App\Http\Requests\StoreTalentRequest;
use App\Http\Requests\UpdateTalentRequest;

class TalentController extends Controller
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
     * @param  \App\Http\Requests\StoreTalentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTalentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function edit(Talent $talent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTalentRequest  $request
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTalentRequest $request, Talent $talent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        //
    }
}
