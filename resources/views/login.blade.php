@extends('layout.mlogin')

@section('title','Login SIMAKAD')

@section('js')
  <script>
    function myFunction() {
        var x = document.getElementById("pwd");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    } 	
  </script>	
@endsection  

@section('content')

<div class="auth animated slideInRight">
    <div class="pvr_card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="logo m-t-15">
                            <img class="w-in-22" src="lib/gbr/logo_unp.png" alt="PVR">
                        </div>
                        <h1 class="text-white">SIMAKAD Online</h1>
                    </div>
                </div>

                <form class="col-lg-12" id="sign_in" method="POST" action="/login.add">
                    @csrf

                    <h5 class="title">Sign in to your Account</h5>

                    @if(Session::has('info'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{Session::get('info')}}
                        </div>
                    @endif
                    
                    @error('userid') 
                        <div class="alert alert-warning alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> {{'Mohon diisi NPP'}}
                        </div>
                    @enderror

                    <div class="form-group-pvr form-float">
                        <div class="form-line-pvr">
                            <input type="text" class="form-control @error('userid') is-invalid @enderror" 
                             name="userid"  >
                            <label class="form-label">Username/NPP</label>
                        </div>
                    </div>
                    <div class="form-group-pvr form-float">
                        <div class="form-line-pvr">
                            <input type="password" class="form-control  @error('pwd') is-invalid @enderror" 
                             name="pwd" id="pwd">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="form-check pull-left">
                        <label class="form-check-label">
                            <!---<input class="form-check-input" type="checkbox" value="">--->
                            <input class="form-check-input" id="ckshow" type="checkbox" onclick="myFunction()"> 
                            <span class="form-check-sign"></span>Show Password                    
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-purple waves-effect" type="submit" name="login" >Sign In</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<div class="auth_bg"></div>


@endsection
