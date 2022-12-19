<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //    return to view login
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        // // validate form
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect()->intended('masyarakat/riwayat-m')->with('success', 'Login Berhasil');
            } else if (Auth::user()->role_id == 2) {
                return redirect()->intended('bappeda/dashboard-b')->with('success', 'Login Berhasil');
            } else if (Auth::user()->role_id == 3) {
                return redirect()->intended('kelurahan/dashboard-k')->with('success', 'Login Berhasil');
            }
        }

        return back()->with('loginError', 'Login gagal! username atau password salah.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
