<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    function show(){
        $data= Projet::all();
        return view('show_projets',['projets'=>$data]);
    }
}
