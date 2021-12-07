  @foreach($q as $data)
  <?php
    $tgls=Tgl_dmy(date('Y-m-d'));
    $isi=$data->isi;
  ?>
  @endforeach


<form class="form-horizontal" role="form" name="frm2" method="post"  >
  @method('put')
  @csrf 

  <div class="form-group" >
	  <div class="col-sm-12">
    <div id="editor" class="ckeditor" >
		    <?php echo $isi; ?>
    </div>
    </div>
  </div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>
</div>
</form>

<script src="assets/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/js/pvr_lite_editor.js"></script>

<script>
CKEDITOR.editorConfig = function( config ) {
	config.toolbar = [
		{ name: 'document', items: [ 'ExportPdf', 'Preview', 'Print' ] },
		{ name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] }
	];
};
</script>

