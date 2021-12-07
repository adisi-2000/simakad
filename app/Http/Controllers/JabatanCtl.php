<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class JabatanCtl extends Controller
{
    public function index() {
        $q=DB::select('Select * FROM r_jabatan');
        return view('jabatan.index',compact('q'));
    }       
        
    public function cetak() {
        $q=DB::select('Select * FROM r_jabatan ');
        return view('jabatan.cetak',compact('q'));
    }       

    public function add() {
        return view('jabatan.add');
    }

    public function addsave(Request $post) {
        DB::table('r_jabatan')->insert([
            'id'=> $post->id,            
            'nama'=> $post->nama,            
            'noku'=> $post->noku            
        ]); 
        //return back();   
        return redirect('jabatan');   
    }

    public function addsavex(Request $post) {
        DB::select("INSERT INTO r_jabatan(id,nama,unit)
             VALUES('".$post->id."'
             ,'". $post->nama."'
             ,'". $post->unit."'
             )"
            ); 
        return redirect('jabatan');   
    }

    public function edit2($id) {
        $data=DB::select("Select * FROM r_jabatan WHERE id='".$id."'");
        return view('jabatan.edit',compact('data'));
    }

    public function edit($id) {
        $id=Crypt::decrypt($id);
        $q=DB::select("Select * FROM r_jabatan WHERE id='".$id."'");
        return view('jabatan.edit',compact('q'));
    }

    public function editsave(Request $post,$id) {
        DB::select("UPDATE r_jabatan SET
              nama='". $post->nama."'
             ,noku='". $post->noku."'
             WHERE id='".$id."'"
            ); 
        return redirect('jabatan');   
    }

    public function del($id) {
        $id=Crypt::decrypt($id);
        $q=DB::select("DELETE FROM r_jabatan WHERE id='".$id."'");
        return redirect('jabatan');   
    }

}//end class
