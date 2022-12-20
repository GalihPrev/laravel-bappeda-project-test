<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        
        $user = User::all();
        // dd($user);
        return view('profile', ['user' => $user]);
    }
    
}
