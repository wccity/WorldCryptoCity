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

                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="name">Username</label>
                            <div class="input-icon">
                             <i> <img src="{{ asset('img/users.png') }}"></i>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autofocus >
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-icon">
                                <i class="mdi mdi-email"></i>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Email" autofocus >
                                
                            </div>
                        </div>
                        <div class="form-group ">
                                <label for="password">Password</label>
                                <div class="input-icon">
                                    <i class="mdi mdi-lock"></i>
                                     <span toggle="#password-field" class="passtoggle mdi mdi-eye toggle-password"></span>
                                 {{--    <span ></span> --}}
                                    <input type="password" class="form-control" id="password-field"  name="password" placeholder="Enter Your Password" >
                                </div>
                            </div>

                        <div class="form-group ">
                                <label for="password">Confirm Password</label>
                                <div class="input-icon">
                                    <i class="mdi mdi-lock"></i>
                                     <span toggle="#password-test" class="passtoggle mdi mdi-eye toggle-password"></span>
                                 {{--    <span ></span> --}}
                                    <input type="password" class="form-control" id="password-test"  name="password" placeholder="Enter Your Confirm Password" >
                                </div>
                            </div>

                        <div class="d-flex form-check" style="margin-left: -19px;">
                        	<input type="checkbox" class="d-flex form-check"><p style="margin-top: -6px !important;"> &nbsp; I aggree with  <a href="#">Term of Service</a>
                            </p>
                        </div>
                        <button class="btn btn-primary btn-block btn-c mt-4 mb-4">Submit</button>
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




@push('scripts')
<script type="text/javascript">
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