<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\kelurahan;
use App\Models\dataBappeda;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use App\Exports\BappedaExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class BappedaController extends Controller
{


    public function index()
    {
        $countDataKelurahan = dataBappeda::select('kelurahan_id')->distinct()->count('kelurahan_id');

        $countDataUsulan = dataBappeda::count();
        return view('bappeda.dashboard-b', ['countDataUsulan' => $countDataUsulan, 'countDataKelurahan' => $countDataKelurahan]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function showBkel()
    {

        $dataBappeda = DB::table('data_bappedas')
            ->join('kelurahans', 'data_bappedas.kelurahan_id', '=', 'kelurahans.id')
            ->orderBy('kelurahans.name', 'ASC')
            ->select('data_bappedas.*', 'kelurahans.name as nama_kelurahan')
            ->get();

        return view('bappeda.table-bkel', ['dataBappeda' => $dataBappeda]);
    }

    public function showBkat()
    {
        return view('bappeda.table-bkat');
    }

    public function editAkun(Request $request, $id)
    {

        $user = User::find($id);
        $kelurahan = kelurahan::select('id', 'name')->get();
        // dd($user);
        return view('bappeda.edit-akun', ['user' => $user, 'kelurahan' => $kelurahan]);
    }
    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'last_name' => 'nullable|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
    //         'current_password' => 'nullable|required_with:new_password',
    //         'new_password' => 'nullable|min:8|max:12|required_with:current_password',
    //         'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
    //     ]);


    //     $user = User::findOrFail(Auth::user()->id);
    //     $user->name = $request->input('name');
    //     $user->last_name = $request->input('last_name');
    //     $user->email = $request->input('email');

    //     if (!is_null($request->input('current_password'))) {
    //         if (Hash::check($request->input('current_password'), $user->password)) {
    //             $user->password = $request->input('new_password');
    //         } else {
    //             return redirect()->back()->withInput();
    //         }
    //     }

    //     $user->save();

    //     return redirect()->route('profile')->withSuccess('Profile updated successfully.');
    // }

    public function updateAkun(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|max:255',
            'role_id' => 'required|string|max:255',
            'kelurahan_id' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->input('username');
        $user->role_id = $request->input('role_id');
        $user->kelurahan_id = $request->input('kelurahan_id');

        // if (!is_null($request->input('current_password'))) {
        //     if (Hash::check($request->input('current_password'), $user->password)) {
        //         $user->password = $request->input('new_password');
        //     } else {
        //         return redirect()->back()->withInput();
        //     }
        // }

        $user->save();
        return redirect('/bappeda/list-akun')->with('success', 'Data Berhasil Diedit');

        // if ($user) {
        //     return redirect('/bappeda/list-akun')->with('success', 'Data Berhasil Diubah');
        // } else {
        //     return redirect('/bappeda/list-akun')->with('error', 'Data Gagal Diubah');
        // }
    }
    // dd($request->all());
    // $user = User::find($id);
    // $user->update($request->all());
    // if ($user) {
    //     return redirect('/bappeda/list-akun')->with('success', 'Data Berhasil Diubah');
    // } else {
    //     return redirect('/bappeda/list-akun')->with('error', 'Data Gagal Diubah');
    // }



    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function showAkun()
    {
        // join table roles,kelurahans,users  to order by role name 
        $user = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('kelurahans', 'users.kelurahan_id', '=', 'kelurahans.id')
            ->orderBy('roles.name', 'DESC')
            ->select('users.*', 'roles.name as nama_role', 'kelurahans.name as nama_kelurahan')
            ->get();

        // $user = DB::table('users')
        //     ->join('roles', 'users.role_id', '=', 'roles.id')
        //     ->orderBy('roles.name', 'DESC')
        //     ->select('users.*', 'roles.name as nama_role')
        //     ->get();


        return view('bappeda.list-akun', ['user' => $user]);
    }
    public function addAkun()
    {
        $role = role::select('id', 'name')->get();
        $kelurahan = kelurahan::select('id', 'name')->get();
        return view('bappeda.add-akun', ['role' => $role, 'kelurahan' => $kelurahan]);
    }
    public function storeAkun(Request $request)
    {
        // dd('test');

        $User = User::create($request->all());

        if ($User) {
            return redirect('/bappeda/list-akun')->with('success', 'Account Berhasil Ditambahkan');
        } else {
            return redirect('/bappeda/list-akun')->with('error', 'Account Gagal Ditambahkan');
        }
    }

    public function exportExcel()
    {
        // export file from fromaspirasi with paginate 5
        // $formAspirasi = formAspirasi::where('kelurahan_id', Auth::user()->kelurahan->id)->paginate(5);
        return Excel::download(new BappedaExport, 'kelurahan.xlsx');
    }
}
