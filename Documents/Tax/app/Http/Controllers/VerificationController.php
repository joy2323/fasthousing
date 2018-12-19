<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Admin;
use Auth;
use App\User;
use App\Profile;
use App\Http\Requests\ProfileRequest;

class VerificationController extends Controller
{
    public function index(){
        $id= Auth::user()->id;
        $profiles=User::has('profile')->get();
            return view('admin.registered', compact('profiles'));
    }
}
