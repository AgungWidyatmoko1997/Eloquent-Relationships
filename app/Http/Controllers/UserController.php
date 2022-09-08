<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // get user from model
        $users = User::latest()->get();

        // passing user to view
        return view('users', [
            'users' => $users
        ]);
    }
}
