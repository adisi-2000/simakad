<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class HomeCtl extends Controller
{
    public function index() {
        return view('home.index');
    }       
        
    public function view($id) {
        $Sql="SELECT no, tgl, hal, arsip, isi FROM t_info WHERE no='".$id."' ORDER BY tgl DESC, no";
        $q=DB::select($Sql);
        return view('home.view',compact('q'));
    }

    public function edit() {
        return view('home');
    }       

}//end class
