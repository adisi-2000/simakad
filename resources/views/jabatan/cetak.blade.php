@extends('layout.master')
@section('title','Konversi Jabatan')
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
          "buttons": ["excel", "pdf", "print"],
          "data" : dataSet,
        }).buttons().container().appendTo('#tabel_wrapper .col-md-6:eq(0)');
      });
    </script>
@endsection

@section('content')
    <?php  //echo $hsl; ?>
           <!-- Horizontal Form -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                               {{TombolBack('jabatan');}} Konversi Jabatan
                            </h5>


              <form class="form-horizontal" role="form" method="post">
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover" id="tabel">
                        <thead>
                          <tr align="left">
                            <th height="40">ID</th>
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
@endsection
