<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\formAspirasi;
use App\Models\kelurahan;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class UserController extends Controller
{

    public function index(Request $request)
    {

        // 
    }


    public function create()
    {

        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();

        return view('masyarakat.dashboard-mb', ['user' => $user, 'kelurahan' => $kelurahan]);
    }


    public function store(Request $request)
    {
        $formAspirasi = formAspirasi::create($request->all());
        // validation data if create data succes alert success 
        if ($formAspirasi) {
            return redirect('/masyarakat/riwayat-m')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect('/masyarakat/riwayat-m')->with('error', 'Data Gagal Ditambahkan');
        }
    }



    public function show(Request $request)
    {
        $search = $request->search;
        if ($search == null) {
            redirect('/masyarakat/riwayat-m');
        }

        //get data form table aspirasi
        $formAspirasi = formAspirasi::where('users_id', Auth::user()->id)->where('permasalahan', 'like', "%" . $search . "%")->paginate(10);
        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($formAspirasi);
        return view('masyarakat.riwayat-m', ['formAspirasi' => $formAspirasi, 'user' => $user, 'kelurahan' => $kelurahan]);
        // dd('test');
    }


    public function edit(Request $request, $id)
    {
        $formAspirasi = formAspirasi::find($id);
        $user = User::select('id', 'username')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        return view('masyarakat.edit_data', ['formAspirasi' => $formAspirasi, 'user' => $user, 'kelurahan' => $kelurahan]);
    }


    public function update(Request $request, $id)
    {
        $formAspirasi = formAspirasi::find($id);
        $formAspirasi->update($request->all());
        if ($formAspirasi) {
            return redirect('/masyarakat/riwayat-m')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect('/masyarakat/riwayat-m')->with('error', 'Data Gagal Diubah');
        }
    }


    public function destroy($id)
    {
        //
    }
}
