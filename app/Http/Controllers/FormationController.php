<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //Afficher les Formations
    public function Index(){
        $Liste = Formation::all();
        return view('Liste-Formations',['Liste'=>$Liste]);
    }
}
