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
                                <div class="status-icon"><em class="ti ti-check"></em></div><span class="status-text large text-dark">YOU HAVE COMPLETED THE PROCESS OF KYC.</span>
                                <p class="px-md-5"></p><a href="/wallet" class="btn btn-success">Start Wallet</a></div>
                        </div>
                    </div>
      
        <!-- .container -->
    </div>
    @endsection