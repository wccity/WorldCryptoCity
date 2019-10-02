@extends('frontend.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 auth-left">
            <div class="row auth-form mb-4">
                <div class="col-12 col-sm-12">
                    <div class="auth-text-top mb-4">
                        <h1>Password Recovery</h1>
                    </div>

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="email">Enter Pin</label>
                                <div class="input-icon">
                                    <input type="text" class="form-control" id="pin" name="pin" placeholder="Enter Pin" autofocus >
                                    
                                </div>
                            </div>
                            
                          
                            <button class="btn btn-primary btn-block btn-c mt-4 mb-4">Submit</button>
                        </form>
                        <div class="btn-social mb-4">
                        	<p>Back to <a href="/sign-in">Sign In</a></p>
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





@endsection