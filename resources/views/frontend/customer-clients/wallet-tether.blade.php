@extends('frontend.layouts.client-header')
@section('content')


		<main class="main-content">
				<div class="wallet-inner">
					<div class="wallet-inner__header">
						<h2>Tether wallet</h2>
					</div>
				</div>

				<div class="wallet-inner__row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="wallet-inner__col">
						<div class="wallet wallet--full-width" style="background-color: #03A57F	;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
										<!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve"> -->
											<img src="img/tether.png" width="50">
											<g>
												<path d="M20.3,21.4l-1,3.8c1.1,0.3,4.8,1.5,5.3-0.7C25.1,22.2,21.3,21.7,20.3,21.4z"/>
												<path d="M21.5,16.1l-0.9,3.5c1,0.3,4,1.3,4.5-0.7S22.5,16.4,21.5,16.1z"/>
												<path d="M32,0H10C4.5,0,0,4.5,0,10v22c0,5.5,4.5,10,10,10h22c5.5,0,10-4.5,10-10V10C42,4.5,37.5,0,32,0z M28.5,18.9
													c-0.2,1.6-1.1,2.3-2.3,2.7c1.6,0.8,2.4,2,1.6,4.2c-0.9,2.6-3.1,2.9-6.1,2.3L21,31l-1.7-0.4l0.7-2.8c-0.5-0.2-0.9-0.3-1.4-0.4
													l-0.7,2.8l-1.7-0.4l0.7-2.9c-0.4-0.1-0.8-0.2-1.2-0.3L13.4,26l0.9-2l1.3,0.3c0.5,0.1,0.7-0.2,0.8-0.4l1.1-4.5c0.1,0,0.1,0,0.2,0
													c-0.1-0.1-0.2-0.1-0.2-0.1l0.8-3.2c0-0.4-0.1-0.8-0.8-1l-1.3-0.3l0.5-1.9l2.4,0.6c0.4,0.1,0.7,0.2,1.1,0.3l0.7-2.8l1.7,0.4
													l-0.7,2.8c0.5,0.1,0.9,0.2,1.4,0.3l0.7-2.8l1.7,0.4L25,14.9C27.2,15.7,28.8,16.8,28.5,18.9z"/>
											</g>
										</svg>
									</span>
									<span class="wallet__currency-info">
										<span>{{$user_data->userWallet[2]->walletType->name}} Wallet</span>
										<span>{{$user_data->userWallet[2]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__last-transactions">
									<span>+ 0$</span>
									<span>Last day</span>
								</span>

								<span class="wallet__currency-course">
									
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[2]->balance}} {{$user_data->userWallet[2]->walletType->code}}</span>
									<span>{{$user_data->userWallet[2]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<a href="" class="small-btn">Edit</a>

								<span><b>Wallet number:</b> 0x45e1D2D3C1d001aC30E9C0B10e3a9cdD35018Bf0</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-1.png" alt="">
							</span>
						</div>

						<div class="wallet-inner__chart">
							<h3>Tether Chart</h3>
							<div class="chart">
								<canvas id="line-chart"></canvas>
							</div>
							<div class="wallet-inner__btns">
								<a href="/cash-in" class="btn btn--purpure">Send Bitcoin</a>
								<a href="/cash-in" class="btn btn--purpure">Buy Bitcoin</a>
								<a href="#confirmation" class="btn btn--green popup-link">Convert</a>
							</div>
						</div>
					</div>
					<div class="wallet-inner__col">
						<section class="transactions">
							<h3>Tether wallet transactions</h3>
		
							<div class="transactions__list">
								<div class="transaction ">
		
									

							</div>

	<div class="d-none">
		<div class="confirmation" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
			<!-- <h1 class="modal-title" id="exampleModalLabel" align="center">CONVERT</h1> -->
			<img src="img/s.png" width="70px"> <font style="font-size:  100%;"> CONVERT </font>
			</div>
			<div class="modal-body ">
				<div class="form-group ">
				<div class="col-12">
			<label> 
					<!-- <p class="notification__icon">
						BTC   <b class="caret"></b>
					</p>
					<div class="notification__list">
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #58a3ea;"></span>	Sent Litecoin</p>
							<span class="rate rate--minus">- 0 LTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #45d0c;"></span>Recieved Bitcoin</p>
							<span class="rate rate--plus">+ 0.056 BTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #fd5e71;"></span>Declined Bitcoin</p>
							<span class="rate rate--normal">1 BTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #58a3ea;"></span>Sent Litecoin</p>
							<span class="rate rate--minus">- 0.1 LTC</span>
						</div>
						<a href="" class="notification__more">See more</a>
					</div>
				</div>
 -->
			</label> 
			<!-- <div class="col-4">
				 <select class="mdb-select md-form">
				  <option value="" disabled selected>Choose your option</option>
				  <option value="1">Option 1</option>
				  <option value="2">Option 2</option>
				  <option value="3">Option 3</option>
				</select>
			</div>
			<div class="col-4">
				

					<div class="input-wrap">
						<input type="text" placeholder="Amount">
					</div>
				</div>
			</div> -->

			<div class="row">
				

						<div class="col-md-4">
						<div class="form-group">
							 <select class="mdb-select md-form">
							<option value="" disabled selected>BTC</option>
							<option value="BITCOIN">BITCOIN</option>
							<option value="TETHER">TETHER</option>
							<option value="BITCOINCASH">BITCOINCASH</option>
							<option value="ETHERIUM">ETHERIUM</option>
				</select>
						</div>
						</div>

						<div class="col-md-8">
						<div class="input-wrap">
							<input type="text" name="" class="form-control" placeholder="Amount">
						</div>
						</div>
					</div>
			
							<div class="row">
						<div class="col-md-4">
						<div class="form-group">
							 <select class="mdb-select md-form">
							<option value="" disabled selected>BTC</option>
							<option value="BITCOIN">BITCOIN</option>
							<option value="TETHER">TETHER</option>
							<option value="BITCOINCASH">BITCOINCASH</option>
							<option value="ETHERIUM">ETHERIUM</option>
				</select>
						</div>
						</div>

						<div class="col-md-8">
						<div class="input-wrap">
							<input type="text" name="middlename" class="form-control" placeholder="Amount">
						</div>
						</div>
					</div>
					<div class="modal-footer">
			<button type="button" class="btn btn-primary">Convert</button>
			</div>


@endsection
