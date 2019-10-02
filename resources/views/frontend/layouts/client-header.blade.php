<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Wallet</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	 	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/defaults.css') }}">
	<!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

	<!-- Load google font
	================================================== -->
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Lato:300,400,500,700'] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
			'://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<!-- Load other scripts
	================================================== -->
	<script type="text/javascript">
		var _html = document.documentElement;
		_html.className = _html.className.replace("no-js","js");
	</script>

	<style>.preloader{width: 100%;height: 100%;position: fixed;background-color: #fff;z-index: 9999;}</style>


</head>

<body>

<div class="preloader"></div>

	<div class="wrapper">
		<header class="header" style="background-color: #002347;">
				<div class="inner-col">

				<a href="" class="mobile-logo d-md-none">
					<img src="{{ asset('img/logo.png') }}" alt="">
				</a>

				<div class="btn-menu btn-menu--left">
					<div></div>
					<div></div>
					<div></div>
				</div>

				
			</div>

		
			<div class="inner-row align-right">

				<div class="notification">
					<div class="notification__icon">
						<img src="img/notification-icon.svg" alt="">
					</div>
					<div class="notification__list">
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #58a3ea;"></span>Bitcoincash</p>
							<span class="rate rate--minus">- 0 BTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #45d25c;"></span>Tether</p>
							<span class="rate rate--plus">+ 0 BTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #fd5e71;"></span>Bitcoin</p>
							<span class="rate rate--normal">0 BTC</span>
						</div>
						<div class="notification__list-item">
							<p><span class="circle" style="background-color: #58a3ea;"></span>Etherium</p>
							<span class="rate rate--minus">- 0 BTC</span>
						</div>
						<a href="" class="notification__more">See more</a>
					</div>
				</div>

				<div class="d-none d-md-block">
					<div class="user">
						<div class="">
							<form class="search">
					<span class="search__icon">
						<img src="img/search-white.svg" alt="">
					</span>
					<input class="search__input" type="text" placeholder="Search">
				</form>
							<div class="user__arr">
								
							</div>
						</div>
						
					</div>
				</div>

					<div class="d-none d-md-block">
					<div class="user">
						<div class="user__avatar">
							<img src="img/user.png" alt="">
							<div class="user__arr">
								<img src="img/user-dropdown-icon.svg" alt="">
							</div>
						</div>
						<p class="user__name">
							Dummy Dummy
						</p>
						<ul class="user-menu">
							<li class="user-menu__item">
								<a href="" class="user-menu__link">
									<span class="user-menu__icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="18px" height="18px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
											   <path d="M9,6C7.343,6,6,7.343,6,9c0,1.657,1.343,3,3,3c1.657,0,3-1.343,3-3C12,7.343,10.657,6,9,6z M9,10.5
												   c-0.828,0-1.5-0.672-1.5-1.5S8.172,7.5,9,7.5s1.5,0.672,1.5,1.5S9.828,10.5,9,10.5z M15.75,6.75h-1.32l0.93-0.93
												   c0.847-0.909,0.797-2.333-0.112-3.18c-0.864-0.805-2.203-0.805-3.068,0l-0.93,0.93V2.25C11.25,1.007,10.243,0,9,0
												   C7.757,0,6.75,1.007,6.75,2.25v1.32L5.82,2.625C4.911,1.778,3.487,1.828,2.64,2.737c-0.805,0.864-0.805,2.203,0,3.068l0.93,0.93
												   H2.25C1.007,6.735,0,7.742,0,8.985c0,1.243,1.007,2.25,2.25,2.25h1.32L2.625,12.18c-0.847,0.909-0.797,2.333,0.112,3.18
												   c0.864,0.805,2.203,0.805,3.068,0l0.93-0.93v1.32c0,1.243,1.007,2.25,2.25,2.25c1.243,0,2.25-1.007,2.25-2.25v-1.32l0.93,0.93
												   c0.909,0.847,2.333,0.797,3.18-0.112c0.805-0.864,0.805-2.203,0-3.068l-0.93-0.93h1.32c1.243,0.008,2.257-0.992,2.265-2.235V9
												   C18,7.757,16.993,6.75,15.75,6.75z M15.75,9.75h-1.56c-0.125,0.868-0.465,1.69-0.99,2.393l1.102,1.102
												   c0.269,0.315,0.233,0.788-0.082,1.057c-0.281,0.241-0.695,0.241-0.976,0L12.142,13.2c-0.702,0.525-1.525,0.865-2.393,0.99v1.56
												   c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.56c-0.868-0.125-1.69-0.465-2.393-0.99l-1.102,1.102
												   c-0.315,0.269-0.788,0.233-1.057-0.082c-0.241-0.281-0.241-0.695,0-0.976l1.102-1.102c-0.525-0.702-0.865-1.525-0.99-2.393h-1.56
												   c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h1.56c0.125-0.868,0.465-1.69,0.99-2.393L3.697,4.754
												   C3.428,4.439,3.464,3.966,3.779,3.697c0.281-0.241,0.695-0.241,0.976,0l1.102,1.102c0.702-0.525,1.525-0.865,2.393-0.99v-1.56
												   c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.56c0.868,0.125,1.69,0.465,2.393,0.99l1.102-1.102
												   c0.315-0.269,0.788-0.233,1.057,0.082c0.241,0.281,0.241,0.695,0,0.976L13.2,5.857c0.525,0.702,0.865,1.525,0.99,2.393h1.56
												   c0.414,0,0.75,0.336,0.75,0.75S16.164,9.75,15.75,9.75z"/>
									   </svg>
									</span>
									<span class="user-menu__text">
										Settings 
									</span>
								</a>
							</li>
							<li class="user-menu__item">
								<a href="/sign-in" class="user-menu__link">
									<span class="user-menu__icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="9.467px" height="11px" viewBox="0 0 9.467 11" style="enable-background:new 0 0 9.467 11;" xml:space="preserve">
											   <path d="M8.545,5.135H7.811V2.971C7.811,1.332,6.481,0,4.841,0H4.625C2.987,0,1.656,1.331,1.656,2.971
												   v0.721h1.231V2.971c0-0.96,0.78-1.74,1.738-1.74h0.216c0.959,0,1.738,0.781,1.738,1.74v2.165H0.922C0.416,5.135,0,5.548,0,6.056
												   v4.024C0,10.587,0.413,11,0.922,11h7.622c0.507,0,0.922-0.412,0.922-0.92V6.056C9.467,5.548,9.054,5.135,8.545,5.135z
													M8.236,9.769H1.231V6.366h7.005V9.769z"/>
									   </svg>
									</span>
									<span class="user-menu__text">
										Sign out 
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="btn-menu btn-menu--right">
					<div></div>
					<div></div>
					<div></div>
				</div>

			</div>

		</header>



@include('frontend.layouts.client-sidebar')
@yield('content')




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

<script src="{{ asset('js/scripts.min.js') }}"></script>

</body>
</html>
