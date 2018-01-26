@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>ABout Us</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="about" class="btn btn-fill btn-default">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- About Item Start -->
<div class="about-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="rooms-detail-slider simple-slider">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="../images/about-item-1.jpg" class="img-preview" alt="About">
                                </div>
                                <div class="item">
                                    <img src="../images/about-item-2.jpg" class="img-preview" alt="About">
                                </div>
                                <div class="item">
                                    <img src="../images/about-item-3.jpg" class="img-preview" alt="About">
                                </div>
                                <div class="item active">
                                    <img src="../images/about-item-4.jpg" class="img-preview" alt="About">
                                </div>
                                <div class="item">
                                    <img src="../images/about-item-5.jpg" class="img-preview" alt="About">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg" aria-hidden="true">
                                        <img src="../images/chevron-left.png" alt="chevron-left">
                                    </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="../images/chevron-right.png" alt="chevron-right">
                                    </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
            <!-- About Item End -->
        </div>
    </div>
</div>
<!-- About Item End -->

<!-- About team Start -->
<div class="about-team-meet content-area">
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h2>Our Management Team</h2>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- About Box-->
                <div class="about-box">
                    <!--header -->
                    <div class="header bg-danger clearfix">
                        <h2>John Doe</h2>
                        <h4>Owner / Co-Invester</h4>
                        <img src="../images/profile-01.jpg" alt="profile-01" class="profile-img">
                    </div>
                    <!-- Detail -->
                    <div class="detail clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                        <!-- Social List -->
                        <ul class="social-list">
                            <li>
                                <a href="#" class="bg-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- About Box End-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- About Box-->
                <div class="about-box">
                    <!--header -->
                    <div class="header bg-primary clearfix">
                        <h2>Silva Naymar Doe</h2>
                        <h4>Manager</h4>
                        <img src="../images/profile-02.jpg" alt="profile-02" class="profile-img">
                    </div>
                    <!-- Detail -->
                    <div class="detail clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <!-- Social List -->
                        <ul class="social-list">
                            <li>
                                <a href="#" class="bg-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- About Box End-->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- About Box-->
                <div class="about-box">
                    <!--header -->
                    <div class="header bg-gray clearfix">
                        <h2>Jason Roy</h2>
                        <h4>Sales Representative</h4>
                        <img src="../images/profile-03.jpg" alt="profile-01" class="profile-img">
                    </div>
                    <!-- Detail -->
                    <div class="detail clearfix">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                        <!-- Social List -->
                        <ul class="social-list">
                            <li>
                                <a href="#" class="bg-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- About Box End-->
            </div>
        </div>
    </div>
</div>
<!-- About team End -->

<!-- Hotel Service-2 Start-->
<div class="hotel-service-2">
    <div class="container">
        <div class="main-title">
            <h1>WE  ARE THE BEST</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <div class="row mgn-btm">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-shield-checked"></i>
                    <h4>high housung security</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-handshake"></i>
                    <h4>trusted agents</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-discount"></i>
                    <h4>get an offer</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-home"></i>
                    <h4>visit your new house</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-fill">Read More</a>
    </div>
</div>
<!-- Hotel Service-2 End-->

<!-- Testimonials Start-->
<div class="testimonials">
    <div class="col-lg-12">
        <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouse2-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="1"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="2"></li>
                <li data-target="#carouse2-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container">
                        <div class="col-md-8 col-md-offset-2 testimonials-inner">
                            <!-- Star Rating -->
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <!-- Paragraph -->
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <!-- Author Rate -->
                            <div class="author-rate">
                                <img src="../images/profile-01.jpg" alt="profile-01">
                                <h4>Maria Morris</h4>
                                <span>Hotel Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <!-- Star Rating -->
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <!-- Paragraph -->
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <!-- Author Rate -->
                            <div class="author-rate">
                                <img src="../images/profile-02.jpg" alt="profile-02">
                                <h4>Maria Morris</h4>
                                <span>Hotel Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <!-- Star Rating -->
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <!-- Paragraph -->
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <!-- Author Rate -->
                            <div class="author-rate">
                                <img src="../images/profile-03.jpg" alt="profile-03">
                                <h4>Maria Morris</h4>
                                <span>Hotel Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="col-md-12 col-md-8 col-md-offset-2 testimonials-inner">
                            <!-- Star Rating -->
                            <ul class="star-rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <!-- Paragraph -->
                            <p>
                                <em>"</em>
                                Lorem ipsum dolor sit amet, nemore facete quo cu, sumo tincidunt pri ex, usu ubique
                                percipitur ea. Ut fugit quaestio Lorem ipsum dolor sit amet, nemore facete quo cu, sumo
                                tincidunt pri ex, usu ubique percipitur ea. Ut fugit quaestio
                                <em>"</em>
                            </p>
                            <!-- Author Rate -->
                            <div class="author-rate">
                                <img src="../images/profile-04.jpg" alt="profile-04">
                                <h4>Maria Morris</h4>
                                <span>Hotel Dealer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carouse2-example-generic" role="button" data-slide="prev">
              <span class="slider-mover-left" aria-hidden="true">
                 <img src="../images/chevron-left.png" alt="left-chevron">
              </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouse2-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <img src="../images/chevron-right.png" alt="right-chevron">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Testimonials End -->
@endsection