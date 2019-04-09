@extends('layout.base2')

@section('content')
    <!--start-about-->
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="col-md-8 about-left">
                    <h3>ABOUT US</h3>
                    <div class="about-left-one">
                        <div class="col-md-4 about-one-left">
                            <img src="images/grape.jpg" alt="">
                        </div>
                        <div class="col-md-8 about-one-left">
                            <h4>AENEAN NEC EROS. VESTIBULUM ANTE IPSUM PRIMIS IN FAUCIBUS ORCI.</h4>
                            <p> Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus. Pellentesque vitae tortor id neque fermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="about-left-one">
                        <div class="col-md-4 about-one-left">
                            <img src="images/millet.jpg" alt="">
                        </div>
                        <div class="col-md-8 about-one-left">
                            <h4>LUCTUS ET ULTRICES POSUERE CUBILIA CURAE SUSPENDISSE SOLLICITUDIN</h4>
                            <p>Vitae pellentesque nec, pharetra a orci. Praesent nunc nunc, egestas eget elementum sed; rutrum eget metus! Vestibulum congue congue dui ut porta. Aenean laoreet viverra turpis, a commodo purus eleifend a. Nam lacus dui; egestas ut aliquam!</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 about-left">
                    <h3>OUR VALUES</h3>
                    <ul>
                        <li><a href="#">In faucibus orciluctus et</a></li>
                        <li><a href="#">Aenean nonummy hendrerit mauris</a></li>
                        <li><a href="#">Vestibulum congue congue ut porta</a></li>
                        <li><a href="#">nascetur ridiculus mus</a></li>
                        <li><a href="#">Pellentesque sed dolor</a></li>
                        <li><a href="#">Fusce suscipit varius mi</a></li>
                        <li><a href="#">Aenean ac leo eget nunc fringilla</a></li>
                        <li><a href="#">Suspendisse commodo tempor</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--End-about-->
    <!--start-choose-->
    <div class="choose">
        <div class="container">
            <div class="choose-top">
                <h3>WHY CHOOSE US</h3>
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</P>
            </div>
            <div class="choose-bottom">
                <div class="col-md-4 choose-left">
                    <span class="choose-one"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="col-md-4 choose-left">
                    <span class="choose-two"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="col-md-4 choose-left">
                    <span class="choose-tre"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="choose-bottom">
                <div class="col-md-4 choose-left">
                    <span class="choose-two"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="col-md-4 choose-left">
                    <span class="choose-tre"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="col-md-4 choose-left">
                    <span class="choose-one"> </span>
                    <h4>Lorem ipsum dolor</h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--End-choose-->
    <script>
        $(function(){
            $("#nav li:eq(1) a").addClass('active');
        })
    </script>
@endsection