<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    //
     public function listApp(){
         return view('listAppr',['listApp' => Apprenant::all()]);
     }
}
