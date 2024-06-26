<?php

namespace App\Http\Controllers\Authenticated\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Users\User;

class TopsController extends Controller
{
    public function show(){
User::get();
        return redirect('/top');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
