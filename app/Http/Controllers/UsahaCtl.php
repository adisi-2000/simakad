<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsahaCtl extends Controller
{
    //
    public function index() {
//        $data=DB::table('usaha')->get();
        $data=DB::select('Select * FROM usaha');
        return view('usaha',compact('data'));
/*
        return view('org',
               ['data'=>DB::table('r_org')->get()]
        );
*/
    }               
}
