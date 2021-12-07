<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class SessionCtl extends Controller
{
    public function cetak() {
        return ' Hallo ';
    }

	public function view() {
		if(session()->has('userid')){
			$h= session()->get('userid');
		}else{
			$h='';
		}
        return $h;
	}

	public function add($userid) {
		session()->put('userid',$userid);
		//echo "Data " .$userid . " telah ditambahkan ke session.";
	}

	public function viewx(Request $request) {
		if($request->session()->has('userid')){
			$h= $request->session()->get('userid');
            //echo $h;    
		}else{
			$h='';
            echo ' tidak ada data session';
		}
        return $h;
	}
        
	public function addX(Request $request,$userid) {
		$request->session()->put('userid',$userid);
		echo "Data " .$userid . " telah ditambahkan ke session.";
	}


	public function del(Request $request) {
        $userid=$request->session()->get('userid');
		$request->session()->forget('userid');
		echo "Data " . $userid." telah dihapus dari session.";	
    }

}//end class
