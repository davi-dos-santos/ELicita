<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenovosprocessosRequest;
use App\Http\Requests\UpdatenovosprocessosRequest;
use App\Models\novosprocessos;

class NovosprocessosController extends Controller
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
     * @param  \App\Http\Requests\StorenovosprocessosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenovosprocessosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\novosprocessos  $novosprocessos
     * @return \Illuminate\Http\Response
     */
    public function show(novosprocessos $novosprocessos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\novosprocessos  $novosprocessos
     * @return \Illuminate\Http\Response
     */
    public function edit(novosprocessos $novosprocessos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenovosprocessosRequest  $request
     * @param  \App\Models\novosprocessos  $novosprocessos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenovosprocessosRequest $request, novosprocessos $novosprocessos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\novosprocessos  $novosprocessos
     * @return \Illuminate\Http\Response
     */
    public function destroy(novosprocessos $novosprocessos)
    {
        //
    }
}
