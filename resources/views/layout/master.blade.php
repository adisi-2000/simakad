<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="gbr/logo_unp.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">

  @include('layout.css') 
</head>
<!--Body Begins-->
<body>
<!--Begin Loading-->
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>
<!--End Loading-->
<!--Begin wrapper-->
<div class="wrapper">
  

  <!-- Main Sidebar Container -->
  @include('layout.sidebar')

  <!--Begin Main Panel-->
  <div class="main-panel">
      <!-- Navbar -->
      @include('layout/nav')
      <!-- /.navbar -->

        <!--Begin Content-->
        <div class="content">
          @yield('content')
        </div><!-- End Content--->

          <!--Begin Footer-->
          <footer class="footer">
              <div class="container">
                  <nav>
                      <ul class="footer-menu d-none d-sm-block">
                          <li>
                              <a href="javascript:void(0)">
                                  Home
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  T&C
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  Privacy policy
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  Website
                              </a>
                          </li>
                      </ul>
                      <p class="copyright text-center">
                          © <span id="writeCopyrights"></span>
                          <a href="http://www.pvrtechstudio.com/" target="_blank">PVR Tech Studio</a>, We Design your
                          Future!
                      </p>
                  </nav>
              </div>
          </footer><!--End Footer-->

  </div><!--EndMain Panel-->

</div><!-- ./wrapper -->
<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light"
   data-color="purple" data-click="scroll-top"><i
        class="fa fa-angle-up"></i>
</a>
<!-- end scroll to top btn -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
@include('layout.jquery')
@yield('js')

</body>
</html>
