<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('users.users', ['users' => $users]);
    }
}
