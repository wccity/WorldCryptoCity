@extends('frontend.layouts.master')
@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 auth-left">
            <div class="row auth-form mb-4">
                <div class="col-12 col-sm-12">
                    <div class="auth-text-top mb-4">
                        <h1>Sign Up</h1>
                    </div>

                    <form class="form-horizontal" method="GET" action="/" onsubmit="return false;">

                        <div class="form-group">
                            <label for="name">UserName</label>
                            <div class="input-icon">
                                <i class="mdi mdi-user"></i>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name" autofocus >
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-icon">
                                <i class="mdi mdi-email"></i>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" autofocus >
                                
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password">Password</label>
                            <div class="input-icon">
                                <i class="mdi mdi-lock"></i>
                                <span class="passtoggle mdi mdi-eye toggle-password"></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" >
                            </div>
                        </div>

                         <div class="form-group ">
                            <label for="password">Confirm Password</label>
                            <div class="input-icon">
                                <i class="mdi mdi-lock"></i>
                                <span class="passtoggle mdi mdi-eye toggle-password"></span>
                                <input type="password" class="form-control"  name="password" placeholder="Enter Your Confirm Password" >
                            </div>
                        </div>

                        <div class="d-flex form-check">
                        	I aggree with  <a href="#">Term of Service</a>

                        </div>
                        <button onclick="CreateUser();" class="btn btn-primary btn-block mt-4 mb-4">Create Account</button>
                    </form>
                    <div class="btn-social mb-4">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 auth-right d-lg-flex d-none bg-gradient" id="particles">
            <div class="logo">
            </div>
            <div class="heading">
            </div>
            <div class="shape"></div>
        </div>
    </div>
</div>
    </div>
</div>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Successfully Created Account!
        You will now be redirected to log in page.
      </div>
      <div class="modal-footer">
        <button type="button" onclick="window.location='sign-in';" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>    
function  CreateUser(){

    var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://13.115.97.13/api/usercreate",
  "method": "POST",
  "headers": {
    "Content-Type": "application/json",   
    "Host": "localhost:44329",
    "Accept-Encoding": "gzip, deflate",
    "Content-Length": "140",
    "Connection": "keep-alive",
    "cache-control": "no-cache"
  },
  "processData": false,
  "data": '{"UserName": "' + document.getElementById('username').value + '","Email": "' + document.getElementById('email').value + '", "PasswordString": "' + document.getElementById('password').value + '"}'
}

$.ajax(settings).done(function (response) {
    $('#Modal').modal('show');
});


}
</script>






@endsection