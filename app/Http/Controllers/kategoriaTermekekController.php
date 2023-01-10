<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriaTermekekController extends Controller
{
    public function getCategoryElement(Request $req){
        //echo $req->url;
        $categoryData = DB::select("SELECT kategoriak.nev, kategoriak.k_id, urlek.u_id FROM kategoriak INNER JOIN urlek ON (urlek.kapcsolat=kategoriak.k_id)  WHERE urlek.tipus='kategoria' AND urlek.url=?",[$req->url]);
        
        


        return view("kategoria");
    }
}
