<!DOCTYPE html>
<html class="no-js chrome" lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="lib/gbr/logo_unp.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    
<!---  <meta name="viewport" content="width=device-width, initial-scale=1">--->

@include('layout.cssl') 
</head>
<body class="theme-orange" style="overflow: auto;">
  @yield('content')

  @include('layout.jsl') 
  @yield('js')
</body>
</html>
