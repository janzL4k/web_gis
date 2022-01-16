<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitikModel;
use GrahamCampbell\ResultType\Result;

class GunungController extends Controller
{

    public function __construct()
    {
        $this ->TitikModel= new TitikModel();
    }
    public function index(){
        return view("Gunung.index");
    }

    public function titik(){
        $results=$this->TitikModel->allData();
        return json_encode($results);
    }



}
