<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GunungController extends Controller
{

    public function index(){
        return view("Gunung.index");
    }



}
