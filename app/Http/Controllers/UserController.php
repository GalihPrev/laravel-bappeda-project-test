<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\kelurahan;
use Termwind\Components\Dd;
use App\Models\formAspirasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect('/masyarakat/riwayat-m')->with('warning', 'Data Gagal Ditambahkan');
        }
    }



    public function show(Request $request)
    {
        $search = $request->search;
        if ($search == null) {
            redirect('/masyarakat/riwayat-m');
        }

        //get data form table aspirasi
        $formAspirasi = formAspirasi::where('users_id', Auth::user()->id)
            ->where('permasalahan', 'like', "%" . $search . "%")
            ->Where('penyebab', 'like', "%" . $search . "%")
            ->Where('lokasi', 'like', "%" . $search . "%")
            ->paginate(10);
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
            return redirect('/masyarakat/riwayat-m')->with('warning', 'Data Gagal Diubah');
        }
    }


    public function destroy($id)
    {
        //
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return view('/masyarakat/profile-m', ['user' => $user]);
    }
    public function updateAkun(Request $request, $id)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:20|required_with:current_password',
            'role_id' => 'required',
            'kelurahan_id' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->input('username');
        $user->role_id = $request->input('role_id');
        $user->kelurahan_id = $request->input('kelurahan_id');


        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {

                return redirect()->back()->withInput()->with('warning', 'Password Salah');
            }
        }

        $user->save();
        return redirect('/masyarakat/riwayat-m')->with('success', 'Data Berhasil Diedit');
    }
}
