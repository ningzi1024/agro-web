<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('keywords')
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('other/css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('other/css/style.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('other/css/custom.css')  }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('other/js/vendor/html5shiv.min.js')  }}"></script>
    <script src="{{ asset('other/js/vendor/respond.min.js')  }}"></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">Green<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Connect</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: header -->
@yield('content')

<footer class="probootstrap-footer probootstrap-bg" style="background-image: url(other/img/slider_3.jpg)">
    <div class="container">
        <div class="row mb60">
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">About Our Farm</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    <p><a href="#">Read more...</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Quick Links</h4>
                    <ul class="stack-link">
                        <li><a href="#">Organic Fruits</a></li>
                        <li><a href="#">Organic Vegeables</a></li>
                        <li><a href="#">Non-GMO Products</a></li>
                        <li><a href="#">Locally Grown Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Products</h4>
                    <ul class="stack-link">
                        <li><a href="#">Organic Fruits</a></li>
                        <li><a href="#">Organic Vegeables</a></li>
                        <li><a href="#">Non-GMO Products</a></li>
                        <li><a href="#">Locally Grown Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Subscribe</h4>
                    <p>Far far away behind the word mountains far from.</p>
                    <form action="#">
                        <div class="form-field">
                            <input type="text" class="form-control" placeholder="Enter your email">
                            <button class="btn btn-subscribe"><i class="icon-arrow-long-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <div class="probootstrap-footer-widget">
                    <p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="probootstrap-footer-widget right">
                    <ul class="probootstrap-footer-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
</div>

<script src="{{ asset('other/js/scripts.min.js')  }}"></script>
<script src="{{ asset('other/js/main.min.js')  }}"></script>
<script src="{{ asset('other/js/custom.js')  }}"></script>

</body>
</html>