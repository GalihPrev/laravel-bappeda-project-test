<?php

namespace App\Http\Controllers;

use App\Models\opd;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreopdRequest;
use App\Http\Requests\UpdateopdRequest;

class OpdController extends Controller
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
     * @param  \App\Http\Requests\StoreopdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreopdRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show(opd $opd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit(opd $opd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateopdRequest  $request
     * @param  \App\Models\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateopdRequest $request, opd $opd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy(opd $opd)
    {
        //
    }
}
