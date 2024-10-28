<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRegistationController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;

        $user -> name = $request->input('name');
        $user -> email = $request->input('email');
        $user -> password = Hash::make($request->input('password'));
        $user -> role = 'user';
        $user->save();
        return view('admin.thank');
    }
}
