@extends('frontend.layouts.client-header')
@section('content')


	<main class="main-content">
				<div class="wallet-inner">
					<div class="wallet-inner__header">
						<h2>Ethereum wallet</h2>
					</div>
				</div>

				<div class="wallet-inner__row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="wallet-inner__col">
						<div class="wallet wallet--full-width" style="background-color: #707bcc;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
									   		<path d="M32,0H10C4.5,0,0,4.5,0,10v22c0,5.5,4.5,10,10,10h22c5.5,0,10-4.5,10-10V10C42,4.5,37.5,0,32,0z M14.831,21.05
										   c1.99-3.383,4.08-6.667,6.07-10.05c2.09,3.383,4.08,6.667,6.07,10.05c-0.099,0.099-0.199,0.099-0.298,0.199
										   c-1.891,1.094-3.781,2.189-5.572,3.284c-0.199,0.099-0.398,0.099-0.597,0c-1.791-1.095-3.932-2.304-5.723-3.398L14.831,21.05z
											M20.901,31c-1.99-3.085-4.08-5.97-6.169-8.856c0.199,0.099,0.298,0.199,0.497,0.298c1.791,1.095,3.483,2.09,5.274,3.184
										   c0.298,0.199,0.497,0.199,0.796,0c1.891-1.094,3.781-2.189,5.672-3.284l0.249-0.139C25.13,25.089,23.09,28.114,20.901,31z"/>
									   </svg>
									</span>
									<span class="wallet__currency-info">
										<span>{{$user_data->userWallet[1]->walletType->name}} Wallet</span>
										<span>{{$user_data->userWallet[1]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__last-transactions">
									<span>- 0$</span>
									<span>Last day</span>
								</span>

								<span class="wallet__currency-course">
									
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[1]->balance}} {{$user_data->userWallet[1]->walletType->code}}</span>
									<span>{{$user_data->userWallet[1]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<a href="" class="small-btn">Edit</a>

								<span><b>Wallet number:</b> 0x45e1D2D3C1d001aC30E9C0B10e3a9cdD35018Bf0</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-2.png" alt="">
							</span>
						</div>

						<div class="wallet-inner__chart">
							<h3>Ethereum Chart</h3>
							<div class="chart">
								<canvas id="line-chart"></canvas>
							</div>
							<div class="wallet-inner__btns">
								<a href="/cash-in" class="btn btn--blue">Send Ethereum</a>
								<a href="/cash-in" class="btn btn--purpure">Buy Ethereum</a>
								<a href="#confirmation" class="btn btn--green popup-link">Convert</a>
							</div>
						</div>
					</div>
					<div class="wallet-inner__col">
						<section class="transactions">
							<h3>Ethereum wallet transactions</h3>
		
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
