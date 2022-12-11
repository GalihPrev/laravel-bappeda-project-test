<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelurahan;
use App\Models\formAspirasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KelurahanController extends Controller
{

    public function index()
    {

        // return view('kelurahan.dashboard-k');
    }

    public function create()
    {

        $formAspirasi = formAspirasi::where('users_id', Auth::user()->id)->paginate(5);
        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($formAspirasi);
        return view('kelurahan.dashboard-k', ['formAspirasi' => $formAspirasi, 'user' => $user, 'kelurahan' => $kelurahan]);
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {

        return view('kelurahan.riwayat-k');
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
