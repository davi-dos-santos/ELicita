<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprogoeiroRequest;
use App\Http\Requests\UpdateprogoeiroRequest;
use App\Models\progoeiro;

class ProgoeiroController extends Controller
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
     * @param  \App\Http\Requests\StoreprogoeiroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprogoeiroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\progoeiro  $progoeiro
     * @return \Illuminate\Http\Response
     */
    public function show(progoeiro $progoeiro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\progoeiro  $progoeiro
     * @return \Illuminate\Http\Response
     */
    public function edit(progoeiro $progoeiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprogoeiroRequest  $request
     * @param  \App\Models\progoeiro  $progoeiro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprogoeiroRequest $request, progoeiro $progoeiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\progoeiro  $progoeiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(progoeiro $progoeiro)
    {
        //
    }
}
