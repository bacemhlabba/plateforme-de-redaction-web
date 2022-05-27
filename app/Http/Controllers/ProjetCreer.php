<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetCreer extends Controller
{
    function addData(Request $req){
    
        $projet=new Projet;
        $projet->identifier=$req->identifier;
        $projet->title=$req->title;
        $projet->price=$req->price;
        $projet->description=$req->description;
        $projet->delivery_date=$req->delivery_date;
        $projet->save();
        return redirect('depot_projet');
    }
}
