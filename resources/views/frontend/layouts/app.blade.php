<html class="no-js" lang="en">

    <head>
        <title>Crypto</title>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}" type="text/css">


        <!-- Load google font
        ================================================== -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
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
            var _html = document.documentElement,
                isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

            _html.className = _html.className.replace("no-js","js");

            isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
        </script>
        <script type="text/javascript" src="{{ asset('asset/js/device.min.js') }}"></script>
    </head>

    <body>

@yield('content')


<!-- start footer -->
        <footer id="footer" class="text--center text--lg-left">
            <div class="grid grid--container">
                <div class="row row--xs-middle">
                    <div class="col col--sm-10 col--md-12 col--lg-4">
                        <div class="__item" style="margin-top: -70px;">
                            <img class="img-responsive lazy" width="400" height="40" src="{{ asset('img/footerlogo.png') }}" data-src="{{ asset('img/footerlogo.png') }}" alt="demo">
                            <br>
                              <p class="__title" style="text-decoration: none;">World Crypto City is based on Samao. It is one of the newest and most trusted crypto wallet.</p>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-3 col--xl-offset-1" >
                        <div class="__item">
                            <h4 class="__title">Main menu</h4>

                            <nav id="footer__navigation" class="navigation">
                                <div class="row row--xs-middle">
                                    <div class="col col--xs-auto col--lg-6">
                                        <ul class="__menu">
                                            <li><a href="#" style="color: white;">Home</a></li>
                                            <li><a href="#" style="color: grey;">About us</a></li>
                                            <li><a href="#" style="color: grey;">Contacts</a></li>
                                            <li><a href="#" style="color: grey;">News</a></li>
                                        </ul>
                                    </div>

                                    <div class="col col--xs-auto col--lg-6">
                                        <ul class="__menu">
                                            <li><a href="#" style="color: grey;">Events</a></li>
                                            <li><a href="#" style="color: grey;">Wallet</a></li>
                                            <li><a href="#" style="color: grey;">FAQ’s</a></li>
                                            <li><a href="#" style="color: grey;">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="col col--sm-10 col--md-8 col--lg-5 col--xl-4">
                        <div class="__item">

                            <h4 class="__title">Subscribe</h4>
                            <div class="row row--xs-middle row--xs-between">
                            <div class="col col--sm-10 col--md-8 col--xs-4">
                                <div class="__item">
                                    <div class="social-btns">
                                        <img src="{{ asset('img/dl.png') }}" style="width: 35px;">
                                        <img src="{{ asset('img/download.png') }}" style="width: 40px;">
                                        <img src="{{ asset('img/test.png') }}" style="width: 40px;">
                                    </div>
                                </div>
                            </div> 

                            <form class="form--horizontal" action="#">
                                <div class="b-table">
                                    <div class="cell v-middle">
                                        <div class="input-wrp">
                                            <input class="textfield" type="text" value="" placeholder="E-mail" />
                                        </div>
                                    </div>

                                    <div class="cell v-middle">
                                        <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit" role="button">Subscribe</button>
                                    </div>
                                </div>
                            </form>

                            <p class="__note">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Right Reserved 2019</p>
                        </div>
                    </div>
                </div>

              {{--   <div class="row row--xs-middle row--lg-between">
                    <div class="col col--sm-10 col--md-8 col--lg-4">
                        <div class="__item">
                            <div class="social-btns">
                                <a class="fontello-twitter" href="#"></a>
                                <a class="fontello-facebook" href="#"></a>
                                <a class="fontello-linkedin-squared" href="#"></a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col col--sm-10 col--md-8 col--lg-6  text--lg-right">
                        <div class="__item">
                            <span class="__copy">© 2018, Crypterium Theme by <a class="__dev" href="#" target="_blank">Artureanec</a> | <a href="#">Privacy Policy</a> | <a href="#">Sitemap</a></span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

        <script src="{{ asset('assets/particles.js') }}"></script>
<script src="{{ asset('assets/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('asset/js/main.min.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html> 