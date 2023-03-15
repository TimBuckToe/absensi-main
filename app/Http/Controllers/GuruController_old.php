<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class GuruController extends Controller
{
    //
    public function __invoke(Request $request)
    {
    
    }

    public function tampil(Request $req)
    {
        $data = GuruController::all;
        $data2 = DB::statement("SELECT * FROM guru ");
        

    }
}
