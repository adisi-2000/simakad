  
  @foreach($q as $data)
  <?php
    $tgls=Tgl_dmy(date('Y-m-d'));
    $id=$data->id;
    $noku=$data->noku;
    $nama=$data->nama;

    $urla='jabatan.editsave.'.$id;	

  ?>
  @endforeach


<form class="form-horizontal" role="form" name="frm2" method="post"  >
  @method('put')
  @csrf 

  <div class="form-group" >
    <div class="row">
      <label  class="col-sm-2 control-label">ID </label>
		  <div class="col-sm-10">
			  <input type="text" class="form-control" name="id" id="id"  readonly  
            value="<?php echo $id; ?>">
      </div>
    </div>
  </div>

  <div class="form-group" >
    <div class="row">
      <label  class="col-sm-2 control-label">Nama </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama"  required  
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
