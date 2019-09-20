@extends('frontend.layouts.form')
@section('content')
   <div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">

                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
   <!-- .page-header -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="kyc-status card mx-lg-4">
                        <div class="card-innr">
                            <div class="status status-thank px-md-5">
                                <div class="status-icon"><em class="ti ti-envelope"></em></div><span class="status-text large text-dark">Email Confirmation.</span>
                                <small>We have sent email to @gmail.com to confirm the validity of our email address. After Receiving the email follow the link provided to complete your registration</small>
                                <p class="px-md-5"></p><a href="https://myaccount.google.com/?utm_source=sign_in_no_continue" class="btn btn-success">If you don't recieve any mail Resend confirmation mail</a></div>
                        </div>
                    </div>
      
        <!-- .container -->
    </div>
    @endsection