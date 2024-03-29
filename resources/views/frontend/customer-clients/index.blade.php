@extends('frontend.layouts.client-header')
@section('content')

	
			<main class="main-content">
				<section class="wallets">
					<h2>My Wallet</h2>

					<div class="wallets__list">

						<a href="/wallet-bitcoin" class="wallet" style="background-color: #FF0800;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
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
										<span>{{$user_data->userWallet[0]->walletType->name}}</span>
										<span>{{$user_data->userWallet[0]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[0]->balance}} {{$user_data->userWallet[0]->walletType->code}}</span>
									<span>{{$user_data->userWallet[0]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<span>{{$user_data->userWallet[0]->balance}} BTC - {{$user_data->userWallet[0]->balance}} USD </span>
								<span>+ 0$</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-1.png" alt="">
							</span>
						</a>
						<a href="/wallet-tether" class="wallet" style="background-color: #03A57F;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
									<!-- 	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve"> -->
											<img src="img/tether.png" width="40">
											<path d="M32,0H10C4.5,0,0,4.5,0,10v22c0,5.5,4.5,10,10,10h22c5.5,0,10-4.5,10-10V10C42,4.5,37.5,0,32,0z M14.831,21.05
										   c1.99-3.383,4.08-6.667,6.07-10.05c2.09,3.383,4.08,6.667,6.07,10.05c-0.099,0.099-0.199,0.099-0.298,0.199
										   c-1.891,1.094-3.781,2.189-5.572,3.284c-0.199,0.099-0.398,0.099-0.597,0c-1.791-1.095-3.932-2.304-5.723-3.398L14.831,21.05z
											M20.901,31c-1.99-3.085-4.08-5.97-6.169-8.856c0.199,0.099,0.298,0.199,0.497,0.298c1.791,1.095,3.483,2.09,5.274,3.184
										   c0.298,0.199,0.497,0.199,0.796,0c1.891-1.094,3.781-2.189,5.672-3.284l0.249-0.139C25.13,25.089,23.09,28.114,20.901,31z"/>
									   </svg>
									</span>
									<span class="wallet__currency-info">
										<span>{{$user_data->userWallet[2]->walletType->name}}</span>
										<span>{{$user_data->userWallet[2]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[2]->balance}} {{$user_data->userWallet[2]->walletType->code}}</span>
									<span>{{$user_data->userWallet[2]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<span>{{$user_data->userWallet[2]->balance}} {{$user_data->userWallet[2]->walletType->code}} - {{$user_data->userWallet[2]->balance}} USD</span>
								<span>0$</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/tether.png" alt="" width="25">
							</span>
						</a>
						
						<a href="#add-wallet" class="add-wallet popup-link">
							<span class="add-wallet__icon">
								<img src="img/add-wallet-icon.png" alt="">
							</span>
							<span class="add-wallet__text">
								Add New Wallet
							</span>
						</a>

					</div>
					<br>
				<div class="wallets__list">
						<a href="/wallet-ethereum" class="wallet" style="background-color: #6082B6;">

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
										<span>{{$user_data->userWallet[1]->walletType->name}}</span>
										<span>{{$user_data->userWallet[1]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[1]->balance}} {{$user_data->userWallet[1]->walletType->code}}</span>
									<span>{{$user_data->userWallet[1]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<span>{{$user_data->userWallet[1]->balance}} {{$user_data->userWallet[1]->walletType->code}} - {{$user_data->userWallet[1]->balance}} USD</span>
								<span>- 31$</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-2.png" alt="">
							</span>
						</a>
						<a href="wallet-bitcoin-cash.html" class="wallet" style="background-color: #FBED28;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
										<!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve"> -->
											<img src="img/bitcoin.png" width="50px">
											<path d="M32,0H10C4.5,0,0,4.5,0,10v22c0,5.5,4.5,10,10,10h22c5.5,0,10-4.5,10-10V10C42,4.5,37.5,0,32,0z M14.831,21.05
										   c1.99-3.383,4.08-6.667,6.07-10.05c2.09,3.383,4.08,6.667,6.07,10.05c-0.099,0.099-0.199,0.099-0.298,0.199
										   c-1.891,1.094-3.781,2.189-5.572,3.284c-0.199,0.099-0.398,0.099-0.597,0c-1.791-1.095-3.932-2.304-5.723-3.398L14.831,21.05z
											M20.901,31c-1.99-3.085-4.08-5.97-6.169-8.856c0.199,0.099,0.298,0.199,0.497,0.298c1.791,1.095,3.483,2.09,5.274,3.184
										   c0.298,0.199,0.497,0.199,0.796,0c1.891-1.094,3.781-2.189,5.672-3.284l0.249-0.139C25.13,25.089,23.09,28.114,20.901,31z"/>
									   </svg>
									</span>
									<span class="wallet__currency-info">
								      	<span>{{$user_data->userWallet[3]->walletType->name}}</span>
										<span>{{$user_data->userWallet[3]->walletType->code}}</span>
									</span>
								</span>

								<span class="wallet__course">
									<span>{{$user_data->userWallet[3]->balance}} {{$user_data->userWallet[3]->walletType->code}}</span>
									<span>{{$user_data->userWallet[3]->balanceFiat}} USD</span>
								</span>
							</span>

							<span class="wallet__footer">
								<span>{{$user_data->userWallet[3]->balance}} {{$user_data->userWallet[3]->walletType->code}} - {{$user_data->userWallet[3]->balance}} USD</span>
								<span>0$</span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-2.png" alt="">
							</span>
						</a>
						<a href="#add-wallet" class="add-wallet popup-link">
							<span class="add-wallet__icon">
								<img src="img/add-wallet-icon.png" alt="">
							</span>
							<span class="add-wallet__text">
								Add New Wallet
							</span>
						</a>
					</div>
				</section>
				<div align="center">
					<div class="panel panel-default" style="width: 1055px;" align="left">
					   <div class = "panel-heading">
							<strong >Transaction History</strong>		
					   </div>
					   
					    <div class="panel-body">
					<div class="transactions__filters">

						<div class="transactions__filters-col" style="margin-left: -30px;">
							
							<div class="custom-select--grey custom-select--actions">
								<select class="custom-select">
									<option value="All transactions">All transactions</option>
									<option value="Sent">Sent</option>
									<option value="Pending">Pending</option>
									<option value="Recieved">Recieved</option>
									<option value="Decline">Decline</option>
								</select>
							</div>
							
						</div>

						<div class="transactions__filters-col transactions__filters-col--align-right">
							<div class="datapickers">
								<div class="datapicker-range">
									<img src="img/calendar.svg" alt="">
									<input type="text" placeholder="2017-04-01" class="datepicker-input datepicker-here" data-date-format="yyyy-mm-dd">
								</div>
								<div class="separator"></div>
								<div class="datapicker-range">
									<img src="img/calendar.svg" alt="">
									<input type="text" placeholder="2017-04-01" class="datepicker-input datepicker-here" data-date-format="yyyy-mm-dd">
								</div>
							</div>
							
							</div>


							<div class="custom-select--grey custom-select--currency">
								<select class="custom-select">
									<option value="Currency">Currency</option>
									<option value="Ethereum">Ethereum</option>
									<option value="Litecoin">Bitcoincash</option>
								</select>
							</div>

						
							<div class="input-wrap search-input">
								<img src="img/search.svg" alt="">
								<input type="text" placeholder="Search">
							</div>
						</div>
			

					   </div>
					</div>
				</div>
			</main>
		</div>
	</div>



<script>    
    function GetUser() {

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://localhost:44329/api/UserWallet",
            //"url": "http://13.115.97.13/api/UserWallet",
            "method": "POST",
            "headers": {
                "Content-Type": "application/json",
                "Accept-Encoding": "gzip, deflate",
                "Connection": "keep-alive"
            },
            "processData": false,
            "data": '{"Username": "' + document.getElementById('username').value + '","PasswordString": "' + document.getElementById('password').value + '"}'
        }

        $.ajax(settings).done(function (response) {

            console.log(response);
            if (response.status == "Success") {
                window.location = 'wallet';
            }
            else {
                $('#Modal').modal('show');
            }


});


}
</script>

@endsection
