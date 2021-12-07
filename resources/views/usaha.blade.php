@extends('layout.master')

@section('title','Setting Instansi')

@section('js')
  @include('mod.tombol')
  @include('mod.format')
  @include('mod.cari')
@endsection

@section('content')
           <!-- Horizontal Form -->
           <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">        
                    <a href="home" >
                        <!--<i class="nav-icon fas fa-arrow-circle-left"></i>--->
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>

                    SETTING INSTANSI
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data as $usaha) 
                 <?php
                  $Nama=$usaha->nama;
                  $Alamat=$usaha->alamat;
                  $Kota=$usaha->kota;
                ?>
              @endforeach

              <form class="form-horizontal" role="form" method="post">
                <div class="card-body">

                <div class="form-group row" >
                	<label class="col-sm-2 control-label">Nama</label>
		            <div class="col-sm-10">
			            <input type="text" class="form-control" name="nama"
                        value='{{$Nama}}'>
		            </div>
                </div>

                <div class="form-group row" >
	                <label class="col-sm-2 control-label">Alamat</label>
            		<div class="col-sm-10">
			            <input type="text" class="form-control" name="alamat"
                        value='{{ $Alamat}} '>
		            </div>
                </div>

                <div class="form-group row" >
	                <label class="col-sm-2 control-label">Kota</label>
            		<div class="col-sm-10">
			            <input type="text" class="form-control" name="kota"
                        value='{{ $Kota }}'>
		            </div>
                </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="home" class="btn btn-success float-right">Kembali</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
@endsection
