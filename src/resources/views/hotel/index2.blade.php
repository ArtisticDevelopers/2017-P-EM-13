@extends('layouts.app')

@section('content')
<!-- Banner Start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-1">
                <div class="container">
                    <!-- Banner Slider Inner 2 -->
                    <div class="banner-slider-inner-2 text-right">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6 col-sm-6 col-sm-offset-6">
                                <!-- Titel-->
                                <h1><span>Welcome to</span> Hotel Empire</h1>
                                <!-- Paragraph -->
                                <p>Our 68 rooms and suites are wonderfully comfortable with a sleek décor.</p>
                                <!-- Btn -->
                                <a href="rooms-list" class="btn btn-fill">view all rooms</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-2 active">
                <div class="container">
                    <!-- Banner Slider Inner 2 -->
                    <div class="banner-slider-inner-2">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6 col-sm-6 col-sm-offset-6">
                                <!-- Titel-->
                                <h1><span>It's time to </span> relax!</h1>
                                <!-- Paragraph -->
                                <p>More great experience than hotel Both a destination and a journey</p>
                                <!-- Btn -->
                                <a href="service" class="btn btn-fill">view our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                    <!-- Banner Slider Inner 2 -->
                    <div class="banner-slider-inner-2">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-6 col-sm-6 col-sm-offset-6">
                                <!-- Titel-->
                                <h1><span>It's time to </span> feel!</h1>
                                <!-- Paragraph -->
                                <p>More great experience than hotel Both a destination and a journey</p>
                                <!-- Btn -->
                                <a href="rooms-list" class="btn btn-fill">view our services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <img src="../images/chevron-left.png" alt="chevron-left">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="../images/chevron-right.png" alt="chevron-right">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner End-->

<!-- Search Bar Start -->
<div class="container">
    <div class="search-bar-vertical">
        <div class="search-bar-vertical-inner">
            <h2 class="visible-lg visible-md">Find your Room</h2>
            <form>
                <div class="row">
                    <div class="form-group">
                        <label for="checkin">Check In</label>
                        <input class="flatpickr" id="checkin" type="text" placeholder="Checkin Date">
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check Out</label>
                        <input class="flatpickr" id="checkout" type="text" placeholder="Checkout Date">
                    </div>
                    <div class="form-group">
                        <label for="room">Room</label>
                        <select class="form-control" id="room">
                            <option>Choose Room</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="guest">Guest</label>
                        <select class="form-control" id="guest">
                            <option>Choose Guest</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <button class="btn btn-danger">Check Availability</button>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--/ Search Bar End -->

<!-- Section-2 Start-->
<div class="Section-2 content-area ">
    <div class="container">
        <div class="main-title">
            <h1>Favorite Rooms</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
            <div class=" testimonials-2">
                <div id="carouse2-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room01.jpg" alt="room01" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Presidential Beachfront Villa</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 4
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 6
                                        </li>
                                        <li>
                                            <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                           <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $70.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room02.jpg" alt="room02" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Deluxe Suite Sea Facing</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 5
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 6
                                        </li>
                                        <li>
                                            <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $84.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room03.jpg" alt="room03" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Classic Room With Two Double Beds</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 3
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 2
                                        </li>
                                        <li>
                                             <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $67.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room04.jpg" alt="room04" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Grand Deluxe Harbour View Room</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 4
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 6
                                        </li>
                                        <li>
                                            <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                           <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $72.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room05.jpg" alt="room05" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Deluxe Suite Sea Facing</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 5
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 6
                                        </li>
                                        <li>
                                            <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $48.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room06.jpg" alt="room06" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Classic Room With Two Double Beds</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 3
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 2
                                        </li>
                                        <li>
                                             <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $57.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room07.jpg" alt="room07" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Deluxe Suite Sea Facing</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 5
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 6
                                        </li>
                                        <li>
                                            <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $55.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-pad">
                                    <img src="../images/room08.jpg" alt="room08" class="img-responsive">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 details">
                                    <h3>Classic Room With Two Double Beds</h3>
                                    <h4>Room Details</h4>
                                    <ul>
                                        <li>
                                            <strong>Guests:</strong> 3
                                        </li>
                                        <li>
                                            <strong>Children:</strong> 2
                                        </li>
                                        <li>
                                             <strong>Room Size:</strong> 1180 m²
                                        </li>
                                        <li>
                                            <strong>Room Type:</strong> <a href="#">Luxury, Superior</a>
                                        </li>
                                    </ul>
                                    <div class="price">
                                        Rates from  <span class="amount"> $60.00</span> per night
                                    </div>
                                    <a href="#" class="btn btn-fill ">view Room Details</a>
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
    </div>
</div>
<!-- Section-2 End-->

<!-- Section-3 Start-->
<div class="section-3 content-area">
    <div class="container">
        <div class="main-title">
            <h1>Enjoy Your Luxary Vacation</h1>
            <p>Sed hendrerit quam sed ante euismod posu. Mauris ut elementum ante. Vestibuel suscipit convallis purus mattis magna sapien, euismod convallis sagittis quis euismod posu.Vivamus id mi non quam congue venenatis et at lorem.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="features-item clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-pad">
                        <img src="../images/image-feature1.jpg" alt="image-feature1" class="img-responsive">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                        <h4>
                            <a href="#">Four A La Carte Restaurants</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Maecenas mauris orci, pellentesque at vestibulum quis, porttitor eget.</p>
                        <div class="bottom">
                            <div class="feature-time">
                                <i class="fa fa-clock-o"></i>19:00-24:00
                            </div>
                            <div class="pull-right">
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
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="features-item clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-pad">
                        <img src="../images/image-feature2.jpg" alt="image-feature2" class="img-responsive">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                        <h4>
                            <a href="#">Relaxing SPA Center</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Maecenas mauris orci, pellentesque at vestibulum quis, porttitor eget.</p>
                        <div class="bottom">
                            <div class="feature-time">
                                <i class="fa fa-clock-o"></i>09:00-24:00
                            </div>
                            <div class="pull-right">
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
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="features-item clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-pad">
                        <img src="../images/image-feature3.jpg" alt="image-feature3" class="img-responsive">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                        <h4>
                            <a href="#">Ultra Modern Fitness Center</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Maecenas mauris orci, pellentesque at vestibulum quis, porttitor eget.</p>
                        <div class="bottom">
                            <div class="feature-time">
                                <i class="fa fa-clock-o"></i>07:00-23:00
                            </div>
                            <div class="pull-right">
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
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="features-item clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-pad">
                        <img src="../images/image-feature4.jpg" alt="image-feature4" class="img-responsive">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                        <h4>
                            <a href="#">Three Beach Bars and Disco Club</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, conse adipiscing elit. Maecenas mauris orci, pellentesque at vestibulum quis, porttitor eget.</p>
                        <div class="bottom">
                            <div class="feature-time">
                                <i class="fa fa-clock-o"></i>11:00-23:05
                            </div>
                            <div class="pull-right">
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
            </div>
        </div>
    </div>
</div>
<!-- Section-3 End-->

<!-- Section-4 Start-->
<div class="section-4 content-area">
    <div class="container">
        <div class="main-title">
            <h1>What Our Guests Say</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="feedback-item">
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="../images/profile-01.jpg" alt="profile-01">
                        </div>
                        <div class="media-body">
                            <p>Proin ante purus, malesuada vel consectetur eget, ullamcorper id sem. Sed lacinia, orci a rhoncus dignissim, risus metus accumsan nulla, sit amet id mi non quam congue venenatis et at lorem.</p>
                            <h3>Anthony Welch</h3>
                            <span>
                                Customer - <a href="#">Travel Inc.</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="feedback-item">
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="../images/profile-02.jpg" alt="profile-02">
                        </div>
                        <div class="media-body">
                            <p>Proin ante purus, malesuada vel consectetur eget, ullamcorper id sem. Sed lacinia, orci a rhoncus dignissim, risus metus accumsan nulla, sit amet id mi non quam congue venenatis et at lorem.</p>
                            <h3>Brian Thomson</h3>
                            <span>
                                Customer - <a href="#">Vacations Limited</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="feedback-item">
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="../images/profile-03.jpg" alt="profile-03">
                        </div>
                        <div class="media-body">
                            <p>Proin ante purus, malesuada vel consectetur eget, ullamcorper id sem. Sed lacinia, orci a rhoncus dignissim, risus metus accumsan nulla, sit amet id mi non quam congue venenatis et at lorem.</p>
                            <h3>Victoria Christopher</h3>
                            <span>
                                Customer - <a href="#">Holiday & SPA</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="feedback-item">
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="../images/profile-04.jpg" alt="profile-04">
                        </div>
                        <div class="media-body">
                            <p>Proin ante purus, malesuada vel consectetur eget, ullamcorper id sem. Sed lacinia, orci a rhoncus dignissim, risus metus accumsan nulla, sit amet id mi non quam congue venenatis et at lorem.</p>
                            <h3>Gerry Brooks</h3>
                            <span>
                               Customer - <a href="#">Delivery & Co</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Section-4 End-->

<!-- Section-5 Start-->
<div class="section-5 content-area">
    <div class="container">
        <div class="main-title">
            <h1>Our Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div class="hotel-our-service">
                    <div class="media">
                        <div class="media-left">
                            <i class="flaticon-aeroplane"></i>
                        </div>
                        <div class="media-body">
                            <h4>Book Cheap Flights Online</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="hotel-our-service">
                    <div class="media">
                        <div class="media-left">
                            <i class="flaticon-exercise"></i>
                        </div>
                        <div class="media-body">
                            <h4>Fitness Facilities</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="hotel-our-service">
                    <div class="media">
                        <div class="media-left">
                            <i class="flaticon-massage"></i>
                        </div>
                        <div class="media-body">
                            <h4>Unique Spa Experience</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="hotel-our-service">
                    <div class="media">
                        <div class="media-left">
                            <i class="flaticon-operator"></i>
                        </div>
                        <div class="media-body">
                            <h4>24/7 Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="hotel-our-service">
                    <div class="media">
                        <div class="media-left">
                            <i class="flaticon-students-couple-full-body-view"></i>
                        </div>
                        <div class="media-body">
                            <h4>Weddings & Honeymoons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="hotel-our-service-pic">
                     <img src="../images/men-img.jpg" alt="alt" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section-5 End-->
@endsection