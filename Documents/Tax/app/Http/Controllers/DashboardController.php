<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Admin;
use Auth;
use App\User;

class DashboardController extends Controller
{
   public function dashboard()
   {
       return view('admin.index');
   }
}
