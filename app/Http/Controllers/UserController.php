<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\formAspirasi;
use App\Models\kelurahan;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();

        return view('masyarakat.dashboard-mb', ['user' => $user, 'kelurahan' => $kelurahan]);
    
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
        $formAspirasi = formAspirasi::where('users_id', Auth::user()->id)->paginate(5);
        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($formAspirasi);
        return view('masyarakat.riwayat-m', ['formAspirasi' => $formAspirasi, 'user' => $user, 'kelurahan' => $kelurahan]);
        // dd('test');
    }

 
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
