<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
     public function listFormation(){
        return view('listForm',['listForm' => Formation::all()]);
    }
    
}
