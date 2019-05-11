<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Customer;

class ProfileController extends Controller
{

    // protected $userid;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $userid =auth()->user()->id;
        $user = User::find($userid);

        return view('profile')->with('user', $user);
    }
}
