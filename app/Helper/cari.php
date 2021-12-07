<?php
    function readmore($string){
        $string=strip_tags($string);
        $string = substr($string, 0, 200); 
        $string = $string . " ... <br><br>"; 
        return $string; 
    }

    function PathKu(){
        return 'lib/foto/';    
    }

    function PathArsip(){
        return 'lib/arsip/';    
    }

function CariFile($nmfile,$tdkada) {
    $h=$nmfile;
    if(!file_exists($nmfile)){
    $h=$tdkada ;
    }
    return $h;
}

    function Aktif($menu) {
       echo "{{ request()->is('".$menu."')?'active':''}}" ;
    }
    function Sessionku(){
		if(session()->has('userid')){
			$h= session()->get('userid');
		}else{
			$h='';
		}
        return $h;
    }

    function NamaUser($UserID){
        $Sql="SELECT p.nama as nama FROM userku u, r_pegawai p 
              WHERE u.userid='" . $UserID . "'
              AND   u.pegawai_id=p.id";
        $q=DB::select($Sql);
        $h='';
        foreach ($q as $dataku) {
            $h= $dataku->nama;
        }
        return $h;
    }

    function Ruleku(){
        $userid=Sessionku();
        $h=HasilSQL("Select rule_id FROM userku WHERE userid='".$userid."'");
        return $h;
    }

    function HasilSQL($Sql){
        $q=DB::select($Sql);
        $f=explode(' ',$Sql);
        $id=$f[1];
        $h='';
        foreach ($q as $dataku) {
            $h= $dataku->$id;
        }
        return $h;
    }

    function AdaData($Sql){
        $h=HasilSQL($Sql);
        $tf=false;
        if (!empty($h)) $tf=true;
        return $tf;
    }


    function PilihCombo($data,$cari) {
        $h="";
        if (trim($data)==trim($cari)) $h='selected="selected"';
        return $h;	
    }
        
    function IsiCombo($Sql,$cari){
        $h2="";
        $f=explode(' ',$Sql);
        $fd=explode(",",$f[1]);
        $idx=$fd[0];

        $q=DB::select($Sql);
        foreach ($q as $dataku) {
            $id= $dataku->$idx;
            $nama= $dataku->hasil;
            $pilih = PilihCombo($id,$cari); 
            $h2= $h2 . '<option value="' . $id .'" '.$pilih . '> '.$nama.' </option> ';
        }    
        return $h2;
    }
    
    function NotaTgl($Tabel, $Field, $Depan) {
        $tgl=date("d-m-Y"); 
        $ntgl=NoTgl($tgl);
        $Sql1="Select " . $Field . " FROM " . $Tabel . " WHERE " . $Field;
        $Sql=$Sql1 . " LIKE '%" . $ntgl . "%' ORDER BY " . $Field . " DESC limit 1"; 
        $h=HasilSQL($Sql);
        
        if (empty($h)) $h="000000";	
        $h=substr($h,-6,6);
        $n=intval($h)+1; 				
          
        $i=1;
        $nobukti=$Depan . $ntgl. Digit("",$n,6) ;
        while (AdaData($Sql1 . "='" . $nobukti . "'")){
          $i++; 				
          $h=HasilSQL($Sql1 . " LIKE '%" . $ntgl . "%' ORDER BY " . $Field . " DESC limit 1");
          $h=substr($h,-6,6);
          $n=intval($h)+$i;
          $nobukti=$Depan . $ntgl. Digit("",$n,6) ;
        }
        return $nobukti;	
    }
    
?>