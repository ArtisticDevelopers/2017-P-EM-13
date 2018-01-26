@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>Rooms Grid</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="rooms-grid" class="btn btn-fill btn-default">Rooms Grid</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Rooms Grid Start-->
<div class="rooms-grid content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- Block Heading Start-->
                <div class="block-heading">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        Rooms Grid
                    </h4>

                    <div class="toggle-view pull-right">
                        <a href="rooms-list" class="change-view-btn">
                            <i class="fa fa-th-list"></i>
                        </a>
                        <a href="rooms-grid" class="active-view-btn">
                            <i class="fa fa-th-large"></i>
                        </a>
                    </div>
                </div>
                <!-- Block Heading End -->

                <!-- Rooms Grid Start -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-1.jpg" alt="bedroom-1">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Wifi Access</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-key"></i>
                                        <span>Free Safe </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Parking</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-2.jpg" alt="bedroom-2">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-6.jpg" alt="bedroom-6">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-4.jpg" alt="bedroom-4">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-5.jpg" alt="bedroom-5">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-7.jpg" alt="bedroom-7">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-9.jpg" alt="bedroom-9">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="thumbnail rooms-box clearfix">
                            <img src="/images/bedroom-3.jpg" alt="bedroom-3">
                            <!-- detail -->
                            <div class="caption detail">
                                <!-- Header -->
                                <header class="clearfix">
                                    <div class="pull-left">
                                        <h5 class="title">
                                            <a href="rooms-details">King Suite</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">1 bed</a> /
                                            </li>
                                            <li>
                                                <a href="#">2 People</a> /
                                            </li>
                                            <li>
                                                <a href="#">sea  view</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>from $99/day</span>
                                    </div>
                               </header>
                                <!-- Paragraph -->
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        <span>Ac</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>
                                        <span>Room Service</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>
                                        <span>Free Wifi</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>
                                        <span>2 Persons</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>
                                        <span>Car Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-desktop coloi-orange"></i>
                                        <span>TV</span>
                                    </li>
                                </ul>
                                <!-- Btn Div-->
                                <div class="btn-div">
                                    <a href="rooms-details">
                                        <span class="read-more">Ream More</span>
                                        <span class="icon-arrow-right2 bg-danger">
                                            <i class="fa  fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rooms List Box End-->

                <!-- Page navigation Start-->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Page navigation End-->
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <!-- Sidebar Start-->
                <div class="sidebar">
                    <aside class="sidebar-widget">
                        <!-- Review Start -->
                        <div class="review">
                            <!-- Option Bar -->
                            <div class="option-bar">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="section-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="flaticon-royalty-crown"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4>Search Hotel</h4>
                                                    <div class="border"></div>
                                                    <p>Search your desire Hotel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- title-->
                            <h2 class="title">Review Rating</h2>
                            <!-- Ratings Start-->
                            <ul class="ratings">
                                <li>
                                   <a href="#">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(100)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(1525)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(252)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(5665)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(1587)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(554)</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Ratings End-->
                        </div>
                        <!-- Review End -->

                         <!-- Popular Rooms Start -->
                        <div class="popular-rooms">
                            <!-- title-->
                            <h2 class="title">Popular Rooms</h2>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">
                                    Superior Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Deluxe Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    luxury Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Family Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Single Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                   Business Room
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Standard Room
                                </label>
                            </div>
                        </div>
                        <!-- Popular Rooms End -->

                        <!-- Amenities Start -->
                        <div class="amenities">
                            <!-- title-->
                            <h2 class="title">Amenities</h2>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Double Bed
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox9" type="checkbox">
                                <label for="checkbox9">
                                    Free Room Servises
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox10" type="checkbox">
                                <label for="checkbox10">
                                    Free Internet
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox11" type="checkbox">
                                <label for="checkbox11">
                                    Free Newspaper
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox12" type="checkbox">
                                <label for="checkbox12">
                                   Air conditioning
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox13" type="checkbox">
                                <label for="checkbox13">
                                   Personal Safe
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox14" type="checkbox">
                                <label for="checkbox14">
                                    Parking
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox15" type="checkbox">
                                <label for="checkbox15">
                                    Flat Screen TV
                                </label>
                            </div>
                        </div>
                        <!-- Amenities End -->
                    </aside>
                    <!-- End-->

                    <!-- Recent News Start-->
                    <div class="Recent-news sidebar-widget">
                        <!-- Title-->
                        <h2 class="title">Recent News</h2>
                    
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/Recent-sub-01.jpg" alt="Recent-sub-01">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="rooms-details">Amazing Place</a>
                                <span>October 18, 2016</span>
                                <p>$45.000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/Recent-sub-02.jpg" alt="Recent-sub-02">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="rooms-details">Amazing Place</a>
                                <span>October 18, 2016</span>
                                <p>$45.000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/Recent-sub-03.jpg" alt="Recent-sub-03">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="rooms-details">Amazing Place</a>
                                <span>October 18, 2016</span>
                                <p>$45.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Recent News End-->

                    <!-- Rooms Box Start-->
                    <div class="thumbnail rooms-box clearfix">
                        <img src="/images/bedroom-1.jpg" alt="bedroom-1">
                        <!-- detail -->
                         <div class="caption detail">
                            <!-- Header -->
                            <header class="clearfix">
                                <div class="pull-left">
                                    <h5 class="title">
                                        <a href="rooms-details">King Suite</a>
                                    </h5>
                                    <ul class="custom-list">
                                        <li>
                                            <a href="#">1 bed</a> /
                                        </li>
                                        <li>
                                            <a href="#">2 People</a> /
                                        </li>
                                        <li>
                                            <a href="#">sea  view</a> 
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <span>from $99/day</span>
                                </div>
                            </header>
                            <!-- Paragraph -->
                            <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back.</p>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-air-conditioner"></i>
                                    <span>Ac</span>
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    <span>Room Service</span>
                                </li>
                                <li>
                                    <i class="flaticon-wifi"></i>
                                    <span>Free Wifi</span>
                                </li>
                                <li>
                                    <i class="flaticon-students-couple-full-body-view"></i>
                                    <span>2 Persons</span>
                                </li>
                                <li>
                                    <i class="flaticon-car-parking"></i>
                                    <span>Car Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-desktop coloi-orange"></i>
                                    <span>TV</span>
                                </li>
                            </ul>
                            <!-- Btn Div-->
                            <div class="btn-div">
                                <a href="rooms-details">
                                    <span class="read-more">Ream More</span>
                                    <span class="icon-arrow-right2 bg-danger">
                                        <i class="fa  fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Rooms Box End-->

                    <!-- Helping Start-->
                    <div class="helping-Center sidebar-widget">
                        <h2 class="title">Helping Center</h2>
                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
                        <ul class="contact-link">
                            <li>
                                <a href="#"> 
                                    <i class="fa fa-map-marker"></i>
                                    Aenean vulputate porttitor
                                </a>
                            </li>
                            <li>
                                <a href="tel:+55-417-634-7071"> 
                                    <i class="fa fa-phone"></i>
                                    +55 4XX-634-7071
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@themevessel.com">
                                    <i class="fa fa-envelope-o"></i>
                                    info@themevessel.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Helping End-->
                </div>
                 <!-- Sidebar End-->
            </div>
        </div>
    </div>
</div>
<!-- Rooms List End-->
@endsection