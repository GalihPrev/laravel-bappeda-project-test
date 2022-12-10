<?php

namespace App\Http\Controllers;

use App\Models\data_aspirasi;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storedata_aspirasiRequest;
use App\Http\Requests\Updatedata_aspirasiRequest;

class DataAspirasiController extends Controller
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
     * @param  \App\Http\Requests\Storedata_aspirasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedata_aspirasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_aspirasi  $data_aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(data_aspirasi $data_aspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_aspirasi  $data_aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(data_aspirasi $data_aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_aspirasiRequest  $request
     * @param  \App\Models\data_aspirasi  $data_aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedata_aspirasiRequest $request, data_aspirasi $data_aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_aspirasi  $data_aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_aspirasi $data_aspirasi)
    {
        //
    }
}
