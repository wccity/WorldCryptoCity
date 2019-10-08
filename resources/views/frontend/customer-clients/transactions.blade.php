@extends('frontend.layouts.client-header')
@section('content')

	<main class="main-content">
				<section class="transactions">

					<div class="transactions__header">
						<h2>Transactions</h2>

						<!-- <a href="" class="btn btn--blue">Send currency</a> -->
					</div>

					<div class="transactions__filters">

						<div class="transactions__filters-col">

							
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

					<div class="transactions__list">
						<div class="transaction">

						</div>
					</div>
				</section>









@endsection