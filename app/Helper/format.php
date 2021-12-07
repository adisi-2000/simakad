<?php

function bagi($a,$b) {
  if ($a==0 or $b==0) {
    $c=0;
  } else {
    $c=$a/$b;
  }  
  return $c;
}
function joinku($hsl,$data,$gap) {
	$koma='';
	if (!empty($hsl)) $koma=$gap;
	$hsl=$hsl . $koma . $data;
  return $hsl;
}

function enkripku($str) {
  return Crypt::encrypt($str);
}

function enkrip($str) {
  $kunci = '979a218e0632df2935317f98d47956c7';
  $hasil = '';
  for ($i = 0; $i < strlen($str); $i++) {
      $karakter = substr($str, $i, 1);
      $kuncikarakter = substr($kunci, ($i % strlen($kunci))-1, 1);
      $karakter = chr(ord($karakter)+ord($kuncikarakter));
      $hasil .= $karakter;
      
  }
  return urlencode(base64_encode($hasil));
}

function dekrip($str) {
  $str = base64_decode(urldecode($str));
  $hasil = '';
  $kunci = '979a218e0632df2935317f98d47956c7';
  for ($i = 0; $i < strlen($str); $i++) {
      $karakter = substr($str, $i, 1);
      $kuncikarakter = substr($kunci, ($i % strlen($kunci))-1, 1);
      $karakter = chr(ord($karakter)-ord($kuncikarakter));
      $hasil .= $karakter;
      
  }
  return $hasil;
}

function JmlKar($kata, $kar) {
$str = str_ireplace($kar, "",$kata, $count);
return $count; // 3
}
function ipku() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

function inetku() {
    $browser = '';
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
        $browser = 'Netscape';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
        $browser = 'Chrome';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
        $browser = 'Opera';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
        $browser = 'Internet Explorer';
    else
        $browser = 'Other';
    return $browser;
}

function osku() {
	$os=$_SERVER['HTTP_USER_AGENT'];
	return $os;
}

function lokasiku() {
	error_reporting(0);	
	$ip = $_SERVER['REMOTE_ADDR'];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	try {
			$lokasiku= $details->city; // -> "Mountain View"
//			$lokasiku='Semarang'; 
	    	if (!$lokasiku) throw new Exception("Lokal");
		} catch(Exception $e) {
		  	$lokasiku= $e->getMessage();
		}
	return $lokasiku; 
}

function NamaBulan($bln){
	$h='-';
	if ($bln=='1') $h= "Januari";
    if ($bln=='2') $h= "Februari";
    if ($bln=='3') $h= "Maret";
    if ($bln=='4') $h= "April";
    if ($bln=='5') $h= "Mei";
    if ($bln=='6') $h= "Juni";
    if ($bln=='7') $h= "Juli";
    if ($bln=='8') $h= "Agustus";
    if ($bln=='9') $h= "September";
    if ($bln=='10') $h= "Oktober";
    if ($bln=='11') $h= "November";
    if ($bln=='12') $h= "Desember";
   return $h;
}

function CCur($N) {
    $h= str_replace(",","",$N);
    $h= str_replace(".00","",$h);
    return $h;
}

function Polos($kalimat){
	$str= str_replace("'","",$kalimat);
//	$str= str_replace($kata,$ganti,$kalimat);
	$str= str_replace('"','',$str);
	$str=  str_replace(array("\r","\n"),"",$str); // enter ganti blank
//	$str=substr($str,0,200);
	$str=trim($str);
	return $str;
}

function FKoma($N){
    $H= number_format($N,2,".","");	
    return $H;
  }
  
  function FKomaN($N,$K){
    if (is_null($N)) $N=0;
    if (empty($N)) $N=0;	
    $H= number_format($N,$K,".","");	
    return $H;
  }
  
  function FAngka($N) {
    $N=CCur($N);	
    if (is_null($N)) $N=0;
    if (empty($N)) $N=0;	
    $H= number_format($N,2);
    return $H;
  }

  function Digit($Depan,$N,$P) {
	$H="";
	$P2 = strlen($N);
    for ($j=1; $j<= $P-$P2; $j++) {
		$H = $H . "0";
//		echo $H;
	}
	$H=$Depan . $H . $N ;
	return $H;  	
  }  

  function TglHuruf($tanggal){
    //format $tgl YYYY-MM-DD
   $tanggal=date('Y-m-d',strtotime($tanggal));
    
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
 
 	$h="-";
    if ($bln=='1') $h= "Januari";
    if ($bln=='2') $h= "Februari";
    if ($bln=='3') $h= "Maret";
    if ($bln=='4') $h= "April";
    if ($bln=='5') $h= "Mei";
    if ($bln=='6') $h= "Juni";
    if ($bln=='7') $h= "Juli";
    if ($bln=='8') $h= "Agustus";
    if ($bln=='9') $h= "September";
    if ($bln=='10') $h= "Oktober";
    if ($bln=='11') $h= "November";
    if ($bln=='12') $h= "Desember";
	
	$h=$tgl . "-" . $h . "-" . $thn;
	
   return $h;
}


function NamaHari($tanggal){
    //format $tgl YYYY-MM-DD
   $tanggal=date('Y-m-d',strtotime($tanggal));
    
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
 
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
	$h=$tgl;    
    if ($info=='0') $h= "Minggu";
    if ($info=='1') $h= "Senin";
    if ($info=='2') $h= "Selasa";
    if ($info=='3') $h=  "Rabu";
    if ($info=='4') $h=  "Kamis";
    if ($info=='5') $h=  "Jumat";
    if ($info=='6') $h=  "Sabtu";
   return $h;
}

function Tgl_dmy($Tgl) {
    $Tgl2=$Tgl;
    $Tgl2= date('d-m-Y',strtotime($Tgl2));
    return $Tgl2;
  }
  
  function FTahun($Tgl) {
    $Tgl2=$Tgl;
    $Tgl3= date('Y',strtotime($Tgl2));
    return $Tgl3;
  }
  
  function Tgl_dmy2($Tgl) {
    $Tgl2=$Tgl;
    $Tgl2= date('d/m/Y',strtotime($Tgl2));
    return $Tgl2;
  }
  
  
  function TglMy($Tgl) {
    $Tgl2="";
    $Tgl2=date('Y-m-d',strtotime($Tgl));
    return $Tgl2;
  }
  
  function NoTgl($Tgl) {
    $Tgl2="";
    $Tgl2=date('m-d-y',strtotime($Tgl));
    $Bln=substr($Tgl2,0,2);
    $Hari=substr($Tgl2,3,2);
    $Thn=substr($Tgl2,6,2);
    $Tgl2=$Thn . $Bln . $Hari ;
    return $Tgl2;
  }
  
  
?>