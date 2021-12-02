<?php

namespace App\Http\Controllers;

use App\Models\Proffesion;
use App\Http\Requests\StoreProffesionRequest;
use App\Http\Requests\UpdateProffesionRequest;

class ProffesionController extends Controller
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
     * @param  \App\Http\Requests\StoreProffesionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProffesionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proffesion  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function show(Proffesion $proffesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proffesion  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Proffesion $proffesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProffesionRequest  $request
     * @param  \App\Models\Proffesion  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProffesionRequest $request, Proffesion $proffesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proffesion  $proffesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proffesion $proffesion)
    {
        //
    }
}
