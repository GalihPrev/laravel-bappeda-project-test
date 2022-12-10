<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\formAspirasi;
use App\Models\kelurahan;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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

        $user = User::select('id', 'name')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        return view('masyarakat.dashboard-mb', ['user' => $user, 'role' => $kelurahan]);
        //  create form aspirasis
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formAspirasi = formAspirasi::create($request->all());
        return redirect('/masyarakat/riwayat-m');
    }


    public function show(Request $request)
    {

        //get data form table aspirasi
        $formAspirasi = formAspirasi::paginate(5);
        // dd($formAspirasi);
        return view('masyarakat.riwayat-m', ['formAspirasi' => $formAspirasi]);
        // dd('test');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
