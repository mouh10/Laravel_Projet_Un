<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    //Afficher La Liste
    public function Index(){
        $Liste = Apprenant::all();
        return view('Liste-Apprenant',['Liste'=>$Liste]);
    }
}
