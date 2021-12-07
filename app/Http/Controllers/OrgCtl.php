<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class OrgCtl extends Controller
{
    public function index() {
        $data=DB::select('Select * FROM r_org');
        return view('org.index',compact('data'));
    }       
        
    public function cetak() {
        $data=DB::select('Select * FROM r_org');
        return view('org.cetak',compact('data'));
    }       

    public function index2() {
//        $data=DB::table('r_org')->get();
        $data=DB::select('Select * FROM r_org');
//        dd($data);
        return view('org.index',compact('data'));
/*
        return view('org',
               ['data'=>DB::table('r_org')->get()]
        );
*/
    }       
    
    public function add() {
        return view('org.add');
    }

    public function add2() {
        return view('org/add');
    }

    public function addsavex(Request $post) {
        DB::table('r_org')->insert([
            'id'=> $post->id,            
            'nama'=> $post->nama,            
            'unit'=> $post->unit            
        ]); 
        return back();   
//        dd('Berhasil');
    }

    public function addsave(Request $post) {
        DB::select("INSERT INTO r_org(id,nama,unit)
             VALUES('".$post->id."'
             ,'". $post->nama."'
             ,'". $post->unit."'
             )"
            ); 
        return redirect('org');   
    }

    public function edit2($id) {
        $data=DB::select("Select * FROM r_org WHERE id='".$id."'");
        return view('org.edit',compact('data'));
    }

    public function edit($id) {
        $id=Crypt::decrypt($id);
        $data=DB::select("Select * FROM r_org WHERE id='".$id."'");
        return view('org.edit',compact('data'));
    }

    public function editsave(Request $post,$id) {
        DB::select("UPDATE r_org SET
              nama='". $post->nama."'
             ,unit='". $post->unit."'
             WHERE id='".$id."'"
            ); 
        return redirect('org');   
    }

    public function del($id) {
        $id=Crypt::decrypt($id);
        $data=DB::select("DELETE FROM r_org WHERE id='".$id."'");
        return redirect('org');   
    }

}//end class
