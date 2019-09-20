@extends('frontend.layouts.form')
@section('content')

 <div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                   {{--  <h2 class="page-title" style="color: black;">Start your ID-Verification</h2>
                    <p class="large">Personal Information</p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- .page-header -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="kyc-form-steps card mx-lg-4">
                        <div class="form-step form-step1">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">01</div>
                                    <div class="step-head-text">
                                        <h2 class="page-title" style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start your ID-Verification</h2>
                                         {{--  <p class="large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal Information</p> --}}
                                        <small>Please type carefully and fill out the form with your personal details. You can't edit these details once you submitted the form.</small>
                                    </div>
                                </div>
                            </div>
                            <!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="note note-plane note-light-alt note-md pdb-1x"> 
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Last Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">First Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Phone Number <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Date of Birth <span class="text-danger">*</span></label>
                                            <input class="input-bordered date-picker" type="date">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                 </div>
                                <!-- .row -->
                                <h4 class="text-secondary mgt-0-5x">Your Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 1 <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 2</label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">City <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">State <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                   
                                    <!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Zip Code <span class="text-danger">*</span></label>
                                            <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                    <!-- .col -->
                                     <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label for="nationality" class="input-item-label">Nationality <span class="text-danger">*</span></label>
                                           <input class="input-bordered" type="text">
                                        </div>
                                        <!-- .input-item -->
                                    </div>
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .step-fields -->
                        <div class="form-step form-step2">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">02</div>
                                    <div class="step-head-text">
                                        <h4>Document details and Payment wallet</h4>
                                        <p>To verify your account, please upload any of your document</p>
                                    </div>
                                </div>
                            </div>
                            <!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                {{-- <div class="note note-plane note-light-alt note-md pdb-0-5x"><em class="fas fa-info-circle"></em>
                                    <p>In order to complete, please upload any of the following personal document.</p>
                                </div> --}}
                                 <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload Valid ID </h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <div class="upload-box">  
                                                    <div class="upload-zone">
                                                        <div class="dz-message" data-dz-message><span class="dz-message-text">Drag and drop file</span><span class="dz-message-or">or</span>
                                                            <button class="btn btn-success">UPLOAD</button>          
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                {{-- <div class="mx-md-4"><img src="images/vector-passport.png" alt="vector"></div> --}}
                                                <small>To avoid delays when verifying account. Please make sure below:</small>
                                                <small><li></li></small>
                                            </div>
                                        </div>
                                <div class="gaps-2x"></div>
                                 <h5 class="font-mid">Choose type of ID </h5>  
                                <ul class="nav nav-tabs nav-tabs-bordered row flex-wrap guttar-20px" role="tablist">
                                    <li class="nav-item flex-grow-0">
                                        <a class="nav-link d-flex align-items-center active" data-toggle="tab" href="#passport">
                                             <span>Passport</span></a>
                                    </li>
                                    <li class="nav-item flex-grow-0">
                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="#national-card">
                                          <span>National Card</span></a>
                                    </li>
                                    <li class="nav-item flex-grow-0">
                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="#driver-licence">
                                             <span>Driver’s License</span></a> 
                                    </li>
                                </ul>
                                <!-- .nav-tabs-line -->
                                <div class="tab-content" id="myTabContent">      
                                    <div class="tab-pane fade show active" id="passport">
                                      
                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Proof of billing (Must match to your account address)</h5>

                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <div class="upload-box">
                                                    <div class="upload-zone">
                                                        <div class="dz-message" data-dz-message><span class="dz-message-text">Drag and drop file</span><span class="dz-message-or">or</span>
                                                            <button class="btn btn-success">UPLOAD</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                            <label for="swalllet" class="input-item-label">Select Wallet </label>
                                            <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                                <option value="bic">BitCoin</option>
                                                <option value="eth">Ethereum</option>
                                                <option value="bitcoincash">Bitcoin Cash</option>
                                                <option value="usdt">USDT</option>
                                            </select>
                                    <label for="token-address" class="input-item-label">Your tokens:</label>
                                    <input class="input-bordered" type="text" id="token-address" name="token-address">
                                </div>
                                <!-- .input-item -->
                            </div>


                                    <!-- .tab-pane -->
                                  
                        <div class="form-step form-step-final">
                            <div class="form-step-fields card-innr">
                                <div class="input-item">
                                    <input class="input-checkbox input-checkbox-md" id="term-condition" type="checkbox">
                                    <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                                </div>
                                <div class="input-item"> 
                                    <input class="input-checkbox input-checkbox-md" id="info-currect" type="checkbox">
                                    <label for="info-currect">All the personal information I have entered is correct.</label>
                                </div>
                                <div class="gaps-1x"></div><a href="/success" class="btn btn-success">Submit</a></div>
                            <!-- .step-fields -->
                        </div>
                    </div>
                    <!-- .card -->
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>




@endsection  