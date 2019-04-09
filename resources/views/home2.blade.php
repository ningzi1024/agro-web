@extends('layout.base2')

@section('headSet')
    <meta name="keywords" content="布福娜,黑老虎,黑老虎种苗,黑老虎苗木批发,布福娜种苗批发，通道黑老虎苗" />
    <title>黑老虎</title>
@endsection

@section('content')
    <div class="banner">
        <div class="container">
            <div class="bnr-text">
                <h1>WE CELEBRATES THE JOY OF AGRICULTURE</h1>
                <div class="bttn">
                    <a href="#">ASK</a>
                </div>
            </div>
        </div>
    </div>
    <div class="care">
        <div class="container">
            <div class="care-top">
                <h3>WE CARE</h3>
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</P>
            </div>
            <div class="care-bottom">
                <div class="col-md-4 c-bottom">
                    <div class="care-bottom-left">
                        <img src="muban/images/tree.png" alt="">
                        <h4>variations of passages</h4>
                        <p> which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <div class="view">
                            <a href="blog.html">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 c-bottom">
                    <div class="care-bottom-middle">
                        <img src="muban/images/tree-1.png" alt="">
                        <h4>variations of passages</h4>
                        <p> which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <div class="view">
                            <a href="blog.html">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 c-bottom">
                    <div class="care-bottom-right">
                        <img src="muban/images/tree-2.png" alt="">
                        <h4>variations of passages</h4>
                        <p> which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <div class="view">
                            <a href="blog.html">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="news-top">
                <h3>NEWS AND ARTICLES</h3>
            </div>
            <div class="news-bottom">
                <div class="col-md-6 news-bottom-left">
                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                        <img class="port-pic" class="img-responsive" src="muban/images/one-2.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left b-from   b-delay03 ">
                                <span>Sed in lacus ut enim adipiscing aliquet</span>
                                <button>View full article</button>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 news-bottom-left">
                    <div class="news-btm">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                            <img class="port-pic" src="muban/images/apple.jpg" />
                            <div class="b-wrapper">
                                <h2 class="b-animate b-from-left    b-delay03 ">
                                    <button>View full article</button>
                                </h2>
                            </div>
                        </a>
                    </div>
                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                        <img class="port-pic" src="muban/images/veg.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left    b-delay03 ">
                                <button>View full article</button>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
                <div class="news-btm1">
                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                        <img class="port-pic" class="img-responsive" src="muban/images/fd-btm1.jpg" />
                        <div class="b-wrapper">
                            <h2 class="b-animate b-from-left b-left   b-delay03 ">
                                <span>Sed in lacus ut enim adipiscing aliquet</span>
                                <button>View full article</button>
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="fd-btn">
                    <a href="blog.html">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="contact-main">
                <div class="col-md-4 contact-left">
                    <h4>For Help center contact</h4>
                    <p><span>Email:</span><a href="mailto:@example.com">123agro@example.com</a></p>
                    <p><span>Phone:</span>+102 0000 0000</p>
                </div>
                <div class="col-md-4 contact-left">
                    <h4>Address</h4>
                    <p>agr center,georgia capetown Newyork</p>
                </div>
                <div class="col-md-4 contact-left">
                    <h4>Follow us</h4>
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="in"> </span></a></li>
                        <li><a href="#"><span class="yt"> </span></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $("#nav li:eq(0) a").addClass('active');
        })
    </script>
@endsection