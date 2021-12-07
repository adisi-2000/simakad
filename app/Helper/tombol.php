<?php
function Kembali($url){
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . $url .'">';
}

function TombolJS($idx,$btn,$ket) {
	echo '
	<a href="#" id="'.$idx.'" class="'.$btn.'"><font color="white">
		<span>'.$ket.'</span></font></a> 
	';
}

function TombolPrn($url){
    echo '
    <a href="'.$url.'" class="btn btn-primary btn-sm"><span>&nbsp;&nbsp;Print</span></a>
    ';
}

function TombolAddx($url){
    echo '
    <a href="'.$url.'" class="btn btn-info btn-sm"><font color="#07A222">
    <i class="fas fa-plus"></i><span>&nbsp;&nbsp;Add</span></font></a>
    ';
}
function TombolAdd($url){
    echo '
    <a href="'.$url.'" class="btn btn-success btn-sm" ><span>&nbsp;&nbsp;Add</span></a>
    ';
}

function TombolBack($url){
    echo '
    <a href="'.$url.'" class="btn btn-link btn-lg" ><i class="fa fa-chevron-circle-left"></i></a>
    ';
}

function TombolAddJS() {
    echo '
    <a href="#" id="tambah" class="btn btn-success btn-sm" ><span> Add</span></a>
    ';                                
}

function TombolEdit() {
    echo '
    <a href="#" id="ubah" class="btn btn-info btn-sm" ><span> Edit</span></a>
    ';                                
}

function TombolDel() {
    echo '
    <a href="#" id="hapus" class="btn btn-danger btn-sm"><span> Del</span></a> 
    ';
}

function TombolOk() {
	echo '
	<a href="#" id="ok" class="btn btn-success btn-sm"><font color="white">
		<i class="glyphicon glyphicon-ok"></i> <span> Ok</span></font></a> 
	';
}

function TombolView() {
	echo '
	<a href="#" id="lihat" class="btn btn-default btn-sm"><font color="#9704F8">
		<i class="glyphicon glyphicon-list-alt"></i> <span> View</span></font></a> 
	
	';
}

function TombolYN($url,$msg,$button,$tip,$ket) {
$k="return confirm('" .$msg . "')";
$h ='<a href="' . $url . '" 
	 class="'. $button . '"
	 data-toggle="tooltip" title="' . $tip .'"
	 onclick="javascript: ' . $k . '"'. 
	 '>' . $ket . '</a> ';

return $h;	  
}

function Pesan($msg){
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('".$msg."');";
	echo "</script>";
}

function PesanYN($msg,$obj,$url){
	echo '
	<script>
		if (confirm("'.$msg.'")) {
			$("#'.$obj.'").load("'.$url.'"); 
		}
		document.write("Ini link '.$url.'");
	</script>
	'; 	
}

function NewWindow($ket,$url,$button, $T, $L){
//$class='class="btn btn-primary"	';
$h='<a href="#detil" class="'. $button  .'" Onclick="window.open(';
$h= $h . "'" . $url . "','sub',";
$h=$h . "'width=" . $L . ",height=" . $T . "')" ;
//$h=$h . "'width=200,height=100')";
$h=$h . '">' . $ket . '</a>';
return $h;
}

function NewTab($url){
$h="<script type='text/javascript'>   
			window.open( '" . $url . "' )
	</script>";
return $h;
}

function Tombol($url,$btn,$ket) {
$h ='<a href="' . $url . '" 
	 class="' . $btn .'"
	 >' . $ket . '</a> ';
return $h;	  
}

function TombolNewTab($url,$btn,$ket) {
$h ='<a href="' . $url . '" target="_blank" 
	 class="' . $btn .'"
	 >' . $ket . '</a> ';
return $h;	  
}

function konfirm($url,$msg,$tombol) {
$k="return confirm('" .$msg . "')";
$h ='<a href="' . $url . '" 
	 class="btn btn-danger btn-xs"
	 onclick="javascript: ' . $k . '"'. 
	 '>' . $tombol . '</a> ';

return $h;	  
}

function PesanKu($url, $msg, $tombol, $ket) {
$k="return confirm('" .$msg . "')";
$h ='<a href="' . $url . '" 
	 class="' . $tombol . '"
	 onclick="javascript: ' . $k . '"'. 
	 '>' . $ket . '</a> ';

return $h;	  
}


function writeMsg($tipe){
	if ($tipe=='save.sukses') {
		$MsgClass = "alert-success";
		$Msg = "<strong>Sukses!</strong> Data berhasil disimpan!";	
	} else 
	if ($tipe == 'save.gagal') {
		$MsgClass = "alert-danger";
		$Msg = "<strong>Maaf!</strong> Data gagal disimpan!";
	}
	else 
	if ($tipe == 'update.sukses') {
		$MsgClass = "alert-success";
		$Msg = "<strong>Sukses!</strong> Data berhasil diupdate!";
	}
	else 
	if ($tipe == 'update.gagal') {
		$MsgClass = "alert-danger";
		$Msg = "<strong>Maaf!</strong> Data gagal diupdate!";
	}

echo "<div class=\"alert alert-dismissible ".$MsgClass."\">
  	  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
  	  ".$Msg."
	  </div>";		  
}
?>