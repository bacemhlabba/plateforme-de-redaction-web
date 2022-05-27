<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProfileShow extends Controller
{
    function show(){
        $data= Auth::User();
        return view('profile',['user'=>$data]);
    }
}
