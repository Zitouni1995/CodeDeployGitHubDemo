<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function accueil()
  {
    $livre=Livre::all();
    return view('welcome',['livre'=>$livre]);
  }  //
}
