<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretextoRequest;
use App\Http\Requests\UpdatetextoRequest;
use App\Models\texto;

class TextoController extends Controller
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
     * @param  \App\Http\Requests\StoretextoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretextoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function show(texto $texto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function edit(texto $texto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetextoRequest  $request
     * @param  \App\Models\texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetextoRequest $request, texto $texto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function destroy(texto $texto)
    {
        //
    }
}
