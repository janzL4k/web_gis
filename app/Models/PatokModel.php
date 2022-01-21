<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PatokModel extends Model
{
public function allData(){
    $results =DB::table('tbl_patok')
        ->select('nama','latitude','longitude','gambar')
        ->get();
    return $results;
}
}
