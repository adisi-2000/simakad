<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class LoginCtl extends Controller
{
    
    public function add(Request $post) {

        $post->validate([
            'userid' => ['required'],
            'pwd'=>['required','min:3']
        ]);

        $id=$post->userid;
        $pwd=$post->pwd;

        $q=DB::select("Select * FROM userku 
                          WHERE userid='".$id."'
                          AND password='".$pwd."'");
        $userid='';                  
        foreach ($q as $data) {
            $userid=$data->userid;
        }
        if (empty($userid)) {
            return back()->with('info','User dan Password Salah');
        } else {    
            session()->put('userid',$userid);
            return redirect('home'); 
        } 
	}

	public function del() {
		session()->forget('userid');
        return redirect('login');   
    }


}//end class
