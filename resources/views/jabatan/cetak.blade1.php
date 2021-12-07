@extends('layout.master')
@section('title','JABATAN')
@section('judul','Konversi Jabatan')

@section('js')
  <?php
    $b=0;
    $koma='';
    $hsl='';
  ?>    

  @foreach($q as $data)
    <?php 
        $b++; 
        $id=$data->id;
        $nama=Polos($data->nama);
        $noku=$data->noku;
        if ($b > 1) $koma=',';
        $hsl=$hsl. $koma . '["' . $id . '"
        ,"' . $nama . '"
        ,"' . $noku . '"
        ]';  
    ?>
  @endforeach
  

    <script>
      $(function () {
        var dataSet = [ <?php echo $hsl; ?> ];
        $("#tabel").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "stateSave": true, "dom": 'lBfrtip', "order":true,
          "buttons": ["excel", "pdf", "print", "colvis"],
          "data" : dataSet,
        }).buttons().container().appendTo('#tabel_wrapper .col-md-6:eq(0)');
      });
    </script>

    <script>
      $(function () {
        var table = $('#tabel').DataTable();
        $('#tabel tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

        } );


      });

    </script>

@endsection

@section('content')
    <?php // echo $hsl; ?>
           <!-- Horizontal Form -->
           <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">        
                    <a href="org" >
<!--                        <i class="nav-icon fas fa-arrow-circle-left"></i>--->
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>

                    KONVERSI ORGANISASI
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" role="form" method="post">
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover" id="tabel">
                        <thead>
                          <tr align="left">
                            <th height="40">ID</th>
                            <th >Nama</th>
                            <th >Unit</th>
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
            <!-- /.card -->
@endsection
