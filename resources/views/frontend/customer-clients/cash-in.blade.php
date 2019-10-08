@extends('frontend.layouts.client-header')
@section('content')

	<main class="main-content">
				
				<div class="buy">
					<div class="buy__header">

						<h2>Deposite</h2>

						<a href="" class="btn btn--blue">sale currency</a>

					</div>

					<div class="buy__body">

						<div class="exchange">
							<div class="exchange__col">
								<label class="form__label">Give Currency:</label>
								<div class="group-input">
									<input type="text" value="0.00">
									<select class="custom-select">
										<option value="USD">USD</option>
										<option value="EUR">EUR</option>
										<option value="UAH">UAH</option>
									</select>
								</div>			
							</div>
							<div class="exchange__col">
								<label class="form__label">Get Currency:</label>
								<div class="group-input">
									<input type="text" value="0.00">
									<select class="custom-select">
										<option value="Bitcoin">Bitcoin</option>
										<option value="Litecoin">Litecoin</option>
										<option value="Ethereum">Ethereum</option>
									</select>
								</div>
							</div>
						</div>
				
						<div class="payment">

							<h3>Payment details</h3>

							<div class="payment__row">

								<div class="form__row">
									<label class="radio-input">
										<input checked class="radio-input__radio" name="group1" type="radio">
										<span class="radio-input__checkmark"></span>
										<img src="img/visa-mc.png" alt="">
									</label>
	
									<label class="radio-input">
										<input class="radio-input__radio" name="group1" type="radio">
										<span class="radio-input__checkmark"></span>
										<img src="img/paypal.png" alt="">
									</label>
								</div>
								
								
							</div>

							<div class="payment__row">

								<div class="form__row">
									<div class="form__col credit-card">
										<label class="form__label">Credit card number:</label>
										<div class="input-wrap">
											<input type="text">
										</div>
									</div>
									<div class="form__col credit-card-name">
										<label class="form__label">Full Name:</label>
										<div class="input-wrap">
											<input type="text">
										</div>
									</div>
								</div>

							</div>

							<div class="payment__row">

								<div class="form__row">
									<div class="form__col credit-card-month">
										<div class="form__label">
											Month:
										</div>
										<select class="custom-select">
											<option value="January">January</option>
											<option value="February">February</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="June">June</option>
											<option value="July">July</option>
											<option value="August">August</option>
											<option selected value="September">September</option>
											<option value="October">October</option>
											<option value="November">November</option>
											<option value="December">December</option>
										</select>
									</div>
									<div class="form__col credit-card-year">
										<div class="form__label">
											Year:
										</div>
										<select class="custom-select">
											<option value="2022">2022</option>
											<option value="2021">2021</option>
											<option value="2020">2020</option>
											<option value="2019">2019</option>
											<option value="2018">2018</option>
										</select>
									</div>
									<div class="form__col credit-card-cvv">
										<label class="form__label">CVV:</label>
										<div class="input-wrap">
											<input type="text">
										</div>
									</div>
								</div>

							</div>

							<div class="payment__row">

								<a href="" class="btn btn--blue">Buy currency</a>
								<a href="" class="btn btn--green">Save</a>

							</div>

							<img src="img/credit-card.png" alt="" class="payment__img">

						</div>

						<div class="save-payment">

							<h3>Save payment method</h3>

							<div class="save-payment__item">

								<div class="save-payment__header">
									<label class="radio-input">
										<input class="radio-input__radio" name="group1" type="radio">
										<span class="radio-input__checkmark"></span>
										<img src="img/visa-mc.png" alt="">
									</label>
	
									<div class="save-payment__card-num">
									</div>
	
									<div class="save-payment__owner-name">
									</div>

									<div class="edit">Edit</div>
								</div>

								<div class="save-payment__body">


									<div class="payment">

										<div class="payment__row">

											<div class="form__row">
												<label class="radio-input">
													<input checked class="radio-input__radio" name="group2" type="radio">
													<span class="radio-input__checkmark"></span>
													<img src="img/visa-mc.png" alt="">
												</label>
				
											</div>
											
											
										</div>

										<div class="payment__row">

											<div class="form__row">
												<div class="form__col credit-card">
													<label class="form__label">Credit card number:</label>
													<div class="input-wrap">
														<input type="text">
													</div>
												</div>
												<div class="form__col credit-card-name">
													<label class="form__label">Full Name:</label>
													<div class="input-wrap">
														<input type="text">
													</div>
												</div>
											</div>

										</div>

										<div class="payment__row">

											<div class="form__row">
												<div class="form__col credit-card-month">
													<div class="form__label">
														Month:
													</div>
													<select class="custom-select">
														<option value="January">January</option>
														<option value="February">February</option>
														<option value="March">March</option>
														<option value="April">April</option>
														<option value="May">May</option>
														<option value="June">June</option>
														<option value="July">July</option>
														<option value="August">August</option>
														<option selected value="September">September</option>
														<option value="October">October</option>
														<option value="November">November</option>
														<option value="December">December</option>
													</select>
												</div>
												<div class="form__col credit-card-year">
													<div class="form__label">
														Year:
													</div>
													<select class="custom-select">
														<option value="2022">2022</option>
														<option value="2021">2021</option>
														<option value="2020">2020</option>
														<option value="2019">2019</option>
														<option value="2018">2018</option>
													</select>
												</div>
												<div class="form__col credit-card-cvv">
													<label class="form__label">CVV:</label>
													<div class="input-wrap">
														<input type="text">
													</div>
												</div>
											</div>

										</div>

										<div class="payment__row">

											<a href="" class="btn btn--blue">Buy currency</a>
											<a href="" class="btn btn--green">Save</a>

										</div>
\
									</div>

								</div>

							</div>

						</div>

					</div>
				</div>

			</main>
		</div>

	</div>

	<div class="d-none">

		<form class="popup popup-add-wallet zoom-anim-dialog" id="add-wallet">
			<div class="popup__content">
				
				
				<img class="popup-add-wallet__img" src="img/popup-add-wallet-icon.png" alt="">
				<h3>Add new wallet</h3>

				<div class="popup-add-wallet__row">

					<div class="input-wrap">
						<input type="text"  placeholder="Name wallet">
					</div>
					
					<select class="custom-select">
						<option value="Bitcoin">Bitcoin</option>
						<option value="Ethereum">Ethereum</option>
						<option value="Litecoin">Litecoin</option>
					</select>
					
				</div>

				<button class="btn btn--blue btn--full">Add new wallet</button>
			</div>
			<div class="popup__thanks">
				<img src="img/popup-success.png" alt="">
				<h3>Your wallet added successful!</h3>
			</div>
		</form>

	</div>

@endsection