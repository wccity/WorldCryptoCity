@extends('frontend.layouts.master')
@section('content')

	

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 auth-left">
            <div class="row auth-form mb-4">
                <div class="col-12 col-sm-12">
                    <div class="auth-text-top mb-4">
                        <h1>Sign In</h1>
                    </div>

                        <form id="form-signin" action="wallet" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="email">Username</label>
                                <div class="input-icon">
                                    <i class="mdi mdi-email"></i>
                                    <input type="text" class="form-control" name="UserName" placeholder="Enter Username" autofocus required>
                                    
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password">Password</label>
                                <div class="input-icon">
                                    <i class="mdi mdi-lock"></i>
                                     <span toggle="#password-field" class="passtoggle mdi mdi-eye toggle-password"></span>
                                 {{--    <span ></span> --}}
                                    <input type="password" class="form-control" name="PasswordString" placeholder="Enter Your Password" required>
                                </div>
                            </div>
                            <div class="d-flex form-check">
                            	<a href="#">Forgot my password</a>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-c mt-4 mb-4">Submit</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Login Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Login Error!
        Please check your login credentials and try again.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@push('scripts')

@if (session('failAttempt'))
<script>
    $('.modal-body').html('{{session('failAttempt')}}');
    $('#Modal').modal('show');
</script>

@endif

<?php

if (isset($_GET['failAttempt']))
{
	echo ("");
}


?>

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
    });

   
</script>
@endpush
 
@endsection
