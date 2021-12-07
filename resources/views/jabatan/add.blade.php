<?php
$tgl=Tgl_dmy(date('Y-m-d'));
$id='';
$nama='';
$noku='0';
$urla='jabatan.addsave';
?>
  
<form class="form-horizontal" role="form" name="frm2" method="post"  >
  @csrf 

  <div class="form-group" >
    <div class="row">
      <label  class="col-sm-2 control-label">ID </label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" name="id" id="id"  required
            value="<?php echo $id; ?>">
      </div>
    </div>
  </div>

  <div class="form-group" >
    <div class="row">
      <label  class="col-sm-2 control-label">Nama </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama" required  
              value="<?php echo $nama; ?>">
      </div>
    </div>
  </div>

  <div class="form-group" >
    <div class="row">
      <label  class="col-sm-2 control-label">No </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="noku" id="noku"  required  
              value="<?php echo $noku; ?>">
      </div>
    </div>
  </div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

		<button class="btn btn-primary" type="submit" name="Simpan" formaction="<?php echo $urla; ?>">
        Simpan</button>
	</div>
</div>
</form>
