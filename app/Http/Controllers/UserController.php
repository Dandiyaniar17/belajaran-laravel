<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users= User::all();
        return view('User.index', compact('users',), ['judul'=>'user']);
    }

    public function create(){

    }
}
