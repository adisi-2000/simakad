
<?php
  error_reporting(0);

  $userid=Sessionku();
  //echo $userid;
  $Sql="SELECT p.nama as nama, p.nip as nip, u.rule_id as rule
  FROM userku u, r_pegawai p 
  WHERE (u.userid='" . $userid . "' or p.id='".$userid."')
  AND   u.pegawai_id=p.id";

  //if (!AdaData($Sql)) Kembali('login'); 
  if (empty($userid)) Kembali('login'); 
  $photo='0.jpg';

  $q=DB::select($Sql);
  $nmuser=''; $rule=''; $nmrule=''; $foto=''; $nmjbt='';              
  foreach ($q as $dataku) {
      $rule=$dataku->rule;
      $nmrule=HasilSQL("Select nama FROM r_rule WHERE id='".$rule."'");
      $nmuser= $dataku->nama;
      $nip=$dataku->nip;
      $photo=CariFile(PathKu().$nip.'.jpg',PathKu().'0.png');
    }

?>
<!--Begin Sidebar-->
<div class="sidebar" data-color="purple" data-image="lib/gbr/bg.jpg">
        <div class="sidebar-wrapper">
            <!--Begins Logo start-->
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                   
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                   UNPAND
                </a>
            </div>
            <!--End Logo start-->

            <!--Begins User Section-->
            <div class="user">
                <div class="photo">
                    <img src="{{$photo}}"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                            <span>{{$nmuser}}
                                <b class="caret"></b>
                            </span>
                    </a>
                    <div class="collapse m-t-10" id="pvr_user_nav">
                        <ul class="nav">
                            <li>
                                <a class="profile-dropdown" href="javascript:void(0)">
                                    <span class="sidebar-mini"><i class="icon-user"></i></span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="javascript:void(0)">
                                    <span class="sidebar-mini"><i class="icon-settings"></i></span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                    <span class="sidebar-normal">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End User Section-->

            <ul class="nav">
              @include('layout.menu')
            </ul>

        </div>
    </div>
    <!--End Sidebar-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar Aplikasi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.del">Logout</a>
        </div>
      </div>
    </div>
  </div>        