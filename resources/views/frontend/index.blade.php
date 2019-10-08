@extends('frontend.layouts.app')
@section('content')

<!-- start header -->
		<header id="top-bar" class="top-bar--light">
			<div id="top-bar__inner">
				<a id="top-bar__logo" class="site-logo" href="index.html">
					{{-- <img class="img-responsive" width="175" height="42" src="img/site_logo.png" alt="demo" />
					<img class="img-responsive" width="175" height="42" src="img/site_logo_2.png" alt="demo" /> --}}
				</a>

				<a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

				<div id="top-bar__navigation-wrap">
					<div>
						<nav id="top-bar__navigation" class="navigation" role="navigation">
							<ul>
								<li class="active">
									<a href="/" ><span>Home</span></a>

								
								</li>

								<li>
									<a href="javascript:void(0);"  style="color: grey;"><span>Pages</span></a>

					
								</li>

								<li>
									<a href="#" style="color: grey;"><span>White Pappers</span></a>
								</li>

								<li>
									<a href="#" style="color: grey;"><span>FAQ’s</span></a>
								</li>

								<li>
									<a href="#" style="color: grey;"><span>Support</span></a>
								</li>
							</ul>
						</nav>

						<br class="hide--lg">

						<ul id="top-bar__subnavigation">
							<li><a class="custom-btn custom-btn--small custom-btn--style-3" href="/sign-in">Login</a></li>
							<li><a href="/sign-up">Sign up</a></li>

							<li>
								<div id="top-bar__choose-lang">
									<div class="list-wrap">
										<ul class="list">
											<li><img class="img-responsive  circled" src="{{ asset('img/5.png') }}" width="25" height="25" alt="demo" ></li>
											<li><img class="img-responsive  circled" src="{{ asset('img/3.png') }}" width="25" height="25" alt="demo" ></li>

											<li><img class="img-responsive  circled" src="{{ asset('img/6.png') }}" width="25" height="25" alt="demo" ></li>
										</ul>
									</div>

									<i><img class="img--active img-responsive  circled" src="{{ asset('img/1.png') }}" width="25" height="25" alt="demo" ></i>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->

		<!-- start start screen -->
		<div id="particles"> 
		<div id="start-screen" class="start-screen--light start-screen--style-6" >
			<div class="start-screen__slider" data-slick='{"autoplay": false, "fade": true, "dots": true, "speed": 1200}' >

				<!-- start slide -->
				<div class="__slide __slide--1" >
					<div class="start-screen__content" style="background-image: url(img/background.png)" >
						<div class="start-screen__content__inner">
							<div class="grid grid--container">
								<div class="row">
				


					<div class="grid grid--container" style="padding-top:40px;">
                <div class="row row--xs-middle">
                    <div class="col col--sm-10 col--md-8 col--lg-4">
                        <div class="__item">
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-3 col--xl-offset-1">
                        <div class="__item">

                            <nav id="footer__navigation" class="navigation">
                                <div class="row row--xs-middle">
                                    <div class="col col--xs-auto col--lg-6">
                                    </div>

                                    <div class="col col--xs-auto col--lg-6">
                                        <ul class="__menu">
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-5 col--xl-4">
                        <div class="__item">

                            <div class="row row--xs-middle row--lg-between">
                            <form class="form--horizontal" action="#">

                                <div class="b-table">
                                    <div class="cell v-middle">
                                        <div class="input-wrp">
                                            <input class="textfield" type="text" value="" placeholder="E-mail" />
                                        </div>
                                    </div>
	
                                    <div class="cell v-middle">

                                        <a class="custom-btn custom-btn--medium custom-btn--style-2" href="/sign-up">Create Wallet</a>


                                    </div>
                                </div>
                            </form>
						<small class="__note"><span class="__copy"><br>Do you have a question? What is World Crypto City?</span></small>
                        </div>
                    </div>
                </div>
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

@endsection