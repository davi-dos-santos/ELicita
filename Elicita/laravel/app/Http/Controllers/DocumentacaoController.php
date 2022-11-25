<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredocumentacaoRequest;
use App\Http\Requests\UpdatedocumentacaoRequest;
use App\Models\documentacao;

class DocumentacaoController extends Controller
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
     * @param  \App\Http\Requests\StoredocumentacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredocumentacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documentacao  $documentacao
     * @return \Illuminate\Http\Response
     */
    public function show(documentacao $documentacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documentacao  $documentacao
     * @return \Illuminate\Http\Response
     */
    public function edit(documentacao $documentacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedocumentacaoRequest  $request
     * @param  \App\Models\documentacao  $documentacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedocumentacaoRequest $request, documentacao $documentacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentacao  $documentacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentacao $documentacao)
    {
        //
    }
}
