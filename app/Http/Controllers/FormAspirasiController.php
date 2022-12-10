<?php

namespace App\Http\Controllers;

use App\Models\formAspirasi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreformAspirasiRequest;
use App\Http\Requests\UpdateformAspirasiRequest;

class FormAspirasiController extends Controller
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
     * @param  \App\Http\Requests\StoreformAspirasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreformAspirasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formAspirasi  $formAspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(formAspirasi $formAspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formAspirasi  $formAspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(formAspirasi $formAspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformAspirasiRequest  $request
     * @param  \App\Models\formAspirasi  $formAspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateformAspirasiRequest $request, formAspirasi $formAspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formAspirasi  $formAspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(formAspirasi $formAspirasi)
    {
        //
    }
}
