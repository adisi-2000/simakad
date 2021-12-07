@extends('layout.master')

@section('userid')
    <?php
        $userid=session()->get('userid');
    ?>
@endsection

@section('js')
  @include('mod.tombol')
  @include('mod.format')
  @include('mod.cari')

  <?php
    $userid=Sessionku();
//    echo $userid;
    if (empty($userid)) {
        Kembali('login');
        exit;
    }    


    $b=0;
    $koma='';
    $hsl='';
    $os=osku();

    $Sqlt="Select COUNT(npp) FROM r_pegawai WHERE sts='1' ";
    $t=HasilSQL($Sqlt);
    $adata = array();
    $anilai = array();
    $jdata='';
    $jnilai='';
    $jpie='';
    $Sql = "SELECT DISTINCT pendidikan_diakui FROM r_pegawai ORDER BY pendidikan_diakui";
    $q=DB::select($Sql);
    foreach ($q as $dataku) {
        $id= $dataku->pendidikan_diakui;
        $n=HasilSQL($Sqlt." AND pendidikan_diakui='".$id. "' ");
        $nama='"'.$id.'"';
        $prosen=bagi($n,$t) * 100;
        $namap='"'.$id .'(' . $prosen.')"';
        $jdata=joinku($jdata,$nama,",");
        $jnilai=joinku($jnilai,FKoma($n),",");   

        $jpie=$jpie. "['".$nama." (" . FKoma($prosen) . ")'," . $n . "],";

    }
    //echo $jdata . '<br>';
    //echo $jnilai . '<br>';
  ?>    

  

    <script>
      $(function () {
        $('#sekolah2').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                enabled: true,
                alpha: 45
                }
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
	 	    legend: {
				enabled: true
			},
            plotOptions: {
                pie: {
                    innerSize: 70,
                    depth: 70,
			        color: '#F00'
                },
				showInLegend: true
            },
            series: [{  
                name: 'Jumlah',
                data: [ <?php echo $jpie; ?> ]  
            }]
        });

        $('#sekolah').highcharts({
            chart: {
                type: 'bar',
            },
            title: {
                text: null
            },
            xAxis: {
                categories: [<?php echo $jdata; ?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ' Pegawai',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' Pegawai'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: 0,
                y: 0,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Pendidikan',
                data: [<?php echo $jnilai; ?>],
                color: '#0099FF',
            }]
        });


        $('#sekolah3').highcharts({
            chart: {
                type: 'areaspline',
            },
            title: {
                text: null
            },
            xAxis: {
                categories: [<?php echo $jdata; ?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: ' Pegawai',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' Pegawai'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: 0,
                y: 0,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Pendidikan',
                data: [<?php echo $jnilai; ?>],
                color: '#0099FF',
            }]
        });

      });

    </script>

@endsection



@section('title','HOME')

@section('content')
    <?php // echo $hsl; ?>

    <div class="row">
          <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PENDIDIKAN</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="chart">
                            <div id="sekolah" style="height: 500px;"></div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>  
            </div> <!--- card-primary --->   


           <!-- general form elements -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Different Styles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="chart">
                            <div id="sekolah3" style="height: 400px;"></div>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --> 

        </div><!--- col left --->    

        <!-- right column -->
        <div class="col-md-4">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                    <div class="chart">
                            <div id="sekolah2" style="height: 300px;"></div>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!--- col right --->    

    </div><!--- row --->    


@endsection
