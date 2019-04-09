<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('headSet')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="muban/js/jquery-1.11.0.min.js"></script>
    <link href="muban/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="muban/css/style.css" rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!--start-header-->
<div id="home" class="header">
    {{--<div class="top-header">--}}
        {{--<div class="container">--}}
            {{--<div class="logo">--}}
                {{--<a href="index.html"><img src="muban/images/logo.png" alt=""></a>--}}
            {{--</div>--}}
            {{--<!--start-top-nav-->--}}
            {{--<div class="top-nav">--}}
                {{--<ul>--}}
                    {{--<li class="active"><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span>Log in</a></li>--}}
                    {{--<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Sign up</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!---pop-up-box---->
    <script type="text/javascript" src="muban/js/modernizr.custom.min.js"></script>
    <link href="muban/css/popup-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="muban/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!---//pop-up-box---->
    {{--<div id="small-dialog" class="mfp-hide">--}}
        {{--<div class="login">--}}
            {{--<h3>Log In</h3>--}}
            {{--<h4>Already a Member</h4>--}}
            {{--<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />--}}
            {{--<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>--}}
            {{--<input type="submit" value="Login" />--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div id="small-dialog1" class="mfp-hide">--}}
        {{--<div class="signup">--}}
            {{--<h3>Sign Up</h3>--}}
            {{--<h4>Enter Your Details Here</h4>--}}
            {{--<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />--}}
            {{--<input type="text" value="Second Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}" />--}}
            {{--<input type="text" class="email"value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}"  />--}}
            {{--<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>--}}
            {{--<input type="submit"  value="SignUp"/>--}}
        {{--</div>--}}
    {{--</div>--}}
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!--End-header-->
    <div class="navgation">
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="muban/images/menu-icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/aboutUs">About Us</a></li>
                <li><a href="404.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <!----start-top-nav-script---->
            <script type="text/javascript" src="muban/js/responsive-nav.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
            <!----//End-top-nav-script---->
        </div>
        {{--<div class="search2">--}}
            {{--<form>--}}
                {{--<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>--}}
                {{--<input type="submit" value="">--}}
            {{--</form>--}}
        {{--</div>--}}
        <div class="clearfix"> </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
        </div>
    </div>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
</body>
</html>