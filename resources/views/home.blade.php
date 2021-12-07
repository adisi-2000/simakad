@extends('layout.master')
@section('title','HOME')
@section('judul')
    <i class="material-icons">home</i>Informasi
@endsection

@section('js')
    <script>
      $(function () {
        $("#tabel").DataTable({
            $("#tabel").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "stateSave": true, "dom": 'lBfrtip', "order":true,
          "buttons": ["excel", "pdf", "print"],
        }).buttons().container().appendTo('#tabel_wrapper .col-md-6:eq(0)');
      });
    </script>

    <script>
        $('.btn-edit').on('click',function(){
            var id = $(this).attr("idku");
            $.ajax({
                url: 'homeview.'+id,
                method: 'post',
                success:function(data){
                    $('#tampil_data').html(data);  
                    document.getElementById("judul").innerHTML='View Informasi';
                }
            });
        });
    </script>
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pvr-wrapper">
                <div class="pvr-box">
                    <h5 class="pvr-header">
                                Informasi
                                <div class="pvr-box-controls">
                                <a href="home">
                                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                </a>
                                    
                                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                    <i class="material-icons" data-box="close">close</i>
                                </div>
                    </h5>
                    <form name="form3" class="form-horizontal" method="post" >

        <div class="table-responsive">
        <table class="table table-hover" id="tabel">
                <tbody> 

                    <?php

		$img='<img src="lib/gbr/clip.png" border="none" width="20" height="20">'; 	 
        $Sql="SELECT no, tgl, hal, arsip, isi FROM t_info ORDER BY tgl DESC, no";
        $q=DB::select($Sql);
        $b=0;
        foreach ($q as $data) {
		  $b=$b+1;
			  $id=$data->no ;
			  $tgl=Tgl_dmy($data->tgl);
			  $perihal=$data->hal;
			  $arsip1=$data->arsip;
			  $lamp=PathArsip() . $arsip1;
			  $isi=$data->isi;
			  $nmtgl=TglHuruf($tgl);
			  
			  $clip="";	
			  if (!empty($arsip1)) {
					$clip=' <a href="'. $lamp . '" target="new"
								class="btn btn-success btn-xs"  >Download</a>
						';

					$clip=' <a href="'. $lamp . '" target="new"
								class="btn btn-xs"  >' . $img . '</a>
						';
		  	  } 
			  $rm='<a href="homeview.php?id=' . $id .' class="btn-edit btn btn-info btn-xs">Read more..</a>';

  			  $link_perihal='<a href="homeview.' . $id .  '" class="btn-edit" idku="'.$id.'" 
                                data-toggle="modal" data-target="#modalku"
							><font color="#000066"> ' . $perihal . '</font></a>';				
				
			      $td= '<p><h4><font color="#000066">' . $link_perihal .  
					 '</font> &nbsp; ' . $clip . '</h4>'; 	

				  	
				  $td=$td . $nmtgl . ' - ' . readmore($isi) .  
				     '</p>';
					 
//					 $id_en=enkrip($id);


                echo '<tr><td>' . $td . '</td></tr>';	 

                //echo '<tr><td>'. $tgl.'</td><td>' . $perihal . '</td></tr>';	 
        }
	  ?>
        </tbody>
    </table>
    </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
  <div class="modal fade" id="modalku" style="overflow:hidden;" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Bagian header -->
        <div class="modal-header">
          <h4 class="modal-title" id="judul"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Bagian body -->
        <div class="modal-body">
          
          <div id="tampil_data">
            <!-- Data akan ditampilkan disini dengan AJAX -->                   
          </div>
              
        </div>
        <!-- Bagian footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>--->

      </div>
    </div>
  </div>


@endsection
