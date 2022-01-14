<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class lokasiController extends Controller
{
    public function index(){
        return view('Gunung.lokasi');
    }
}
