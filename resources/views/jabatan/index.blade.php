@extends('layout.master')
@section('title','JABATAN')
@section('judul','Jabatan')

@section('js')
  <?php
    $b=0;
    $koma='';
    $hsl='';
  ?>    

  @foreach($q as $data)
    <?php 
        $b++; 
        $id=Crypt::encrypt($data->id);
        $id2=$data->id;
        $nama=Polos($data->nama);
        $noku=$data->noku;
        if ($b > 1) $koma=',';
        $hsl=$hsl. $koma . '["' . $id . '"
        ,"' . $id2 . '"
        ,"' . $nama . '"
        ,"' . $noku . '"
        ]';  
    ?>
  @endforeach
  

    <script>
      $(function () {
        var dataSet = [ <?php echo $hsl; ?> ];
        $("#tabel").DataTable({
          "responsive": true, "lengthChange": true, "autoWidth": false,
          "stateSave": true, "order":true, 
          "data" : dataSet,
        });
      });
    </script>

    <script>
      $(function () {
        var table = $('#tabel').DataTable();
        table.column( 0 ).visible( false ); 
        
        $('#tabel tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

        } );

        $('#hapus').click( function () {
          var kode = table.row('.selected').data()[0]; // same as row(0).data()
          var nama = table.row('.selected').data()[2]; // same as row(0).data()
          var yakin = confirm('Apakah kamu yakin akan menghapus data ' + nama + ' ?');

          if (yakin) {
              window.location = 'jabatan.del.' + kode ;
          }
        } );

        $('#ubah').click( function () {
          var kode = table.row('.selected').data()[0]; // same as row(0).data()
          var url1='jabatan.edit.' + kode;
          $('#tampil_data').empty();
          document.getElementById("judul").innerHTML='Edit Jabatan ';
        
          $(function () {
              $.get(url1, function (data) {
                  $("#tampil_data").append(data);
              });
          });
          $("#modalku").modal();

        } );

        $('#tambah').click( function () {
          var url1='jabatan.add';
          $('#tampil_data').empty();
          document.getElementById("judul").innerHTML='Tambah Jabatan ';
        
          $(function () {
              $.get(url1, function (data) {
                  $("#tampil_data").append(data);
              });
          });
          $("#modalku").modal();

        } );
      });

    </script>

@endsection



@section('content')
    <?php // echo $hsl; ?>
           <!-- Horizontal Form -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                        <h5 class="pvr-header">
                                List Jabatan
                                <div class="pvr-box-controls">
                                <a href="jabatan">
                                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                </a>
                                    
                                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                    <i class="material-icons" data-box="close">close</i>
                                </div>
                    </h5>


              <form class="form-horizontal" role="form" method="post">
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover" id="tabel">
                        <thead>
                          <tr>
                            <td colspan="4">
                              <?php
                                TombolAddJS(); 
                                TombolEdit();
                                TombolDel();
                                TombolPrn('jabatan.cetak'); 
                              ?>	  
                            </td>
                          </tr>

                          <tr align="left">
                            <th height="40" style="display:none;">ID</th>
                            <th>ID</th>
                            <th >Nama</th>
                            <th >No</th>
                          </tr>
                        </thead>

                        <tbody> 
                        </tbody>

                      </table>
                  </div>


                </div>
                <!-- /.card-body -->
              </form>
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
