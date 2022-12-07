<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelicitantesRequest;
use App\Http\Requests\UpdatelicitantesRequest;
use App\Models\licitantes;

class LicitantesController extends Controller
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
     * @param  \App\Http\Requests\StorelicitantesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelicitantesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\licitantes  $licitantes
     * @return \Illuminate\Http\Response
     */
    public function show(licitantes $licitantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\licitantes  $licitantes
     * @return \Illuminate\Http\Response
     */
    public function edit(licitantes $licitantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelicitantesRequest  $request
     * @param  \App\Models\licitantes  $licitantes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelicitantesRequest $request, licitantes $licitantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\licitantes  $licitantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(licitantes $licitantes)
    {
        //
    }
}
