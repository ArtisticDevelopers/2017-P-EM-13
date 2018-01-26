@extends('layouts.app')

@section('content')
<!-- Banner Start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-1 active">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>Welcome to</span> Hotel Empire</h1>
                        <!-- Paragraph -->
                        <p>Our 68 rooms and suites are wonderfully comfortable with a sleek décor.</p>
                        <!-- Btn -->
                        <a href="rooms-list" class="btn btn-fill">view all rooms</a>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
                        <!-- Titel-->
                        <h1><span>It's time to </span> relax!</h1>
                        <!-- Paragraph -->
                        <p>More great experience than hotel Both a destination and a journey</p>
                        <!-- Btn -->
                        <a href="service" class="btn btn-fill">view our services</a>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                    <!-- Banner Slider Inner 1 -->
                    <div class="banner-slider-inner">
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
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <img src="images/chevron-left.png" alt="chevron-left">
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="images/chevron-right.png" alt="chevron-right">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Search Bar Start -->
    <div class="search-bar">
        <div class="container">
            <div class="search-bar-inner">
                <form>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="checkin">Check In</label>
                                <input class="flatpickr" id="checkin" type="text" placeholder="Checkin Date">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="checkout">Check Out</label>
                                <input class="flatpickr" id="checkout" type="text" placeholder="Checkout Date">
                            </div>
                        </div>
                        <div class="col-lg-2">
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
                        </div>
                        <div class="col-lg-2">
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
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <button class="btn btn-danger">Check Availability</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/ Search Bar End -->
</div>
<!-- Banner End-->

<!-- Recent Rooms Start-->
<div class="favorite-rooms content-area clearfix">
    <div class="container">
        <div class="main-title">
            <h1>Our Hotels</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <div class="row">
            @forelse($hotels as $hotel)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <!-- Rooms Box Start-->
                <div class="thumbnail rooms-box clearfix">
                    <img src="../../../../uploads/hotel/{{App\Traits\Database::get_front_image('hotel', $hotel->hotel_id)}}" alt="{{$hotel->hotel_name}}" height="150">
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="rooms-details">{{$hotel->hotel_name}}</a>
                                </h5>
                                <ul class="custom-list">
                                    <li>
                                        <a href="#">{{count($hotel->rooms)}}</a> /
                                    </li>
                                    
                                    <li>
                                        <a href="#">{{$hotel->hotel_type->hotel_type}}</a> 
                                    </li>
                                </ul>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <span>from ${{$hotel->rooms[0]->room_average_price}}/day</span>
                            </div>
                       </header>
                        <!-- Paragraph -->
                        <p>{{$hotel->hotel_description}}</p>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            @forelse($hotel->hotel_facilities as $fac)
                            <li>
                                <i class="fa fa-coffee"></i>
                                <span>{{$fac->hotel_facility}}</span>
                            </li>
                            @empty
                            <li><span>No facilities mentioned</span></li>
                            @endforelse
                        </ul>
                        <!-- Btn Div-->
                        <div class="btn-div">
                            <a href="/hotel/{{$hotel->hotel_id}}">
                                <span class="read-more">Visit</span>
                                <span class="icon-arrow-right2 bg-danger">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Rooms Box End-->
            </div>
            
            @empty
            <p>Currently, hotels are under supervision.</p>
            @endforelse
        </div>
    </div>
</div>
<!-- Recent Rooms End-->
<!-- Recent Rooms Start-->
<div class="favorite-rooms content-area clearfix">
    <div class="container">
        <div class="main-title">
            <h1>Our Rooms</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <div class="row">
            @forelse($rooms as $room)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <!-- Rooms Box Start-->
                <div class="thumbnail rooms-box clearfix">
                    <img src="../../../../uploads/room/{{App\Traits\Database::get_front_image('room', $room->hr_id)}}" alt="{{$room->room_image}}" height="150">
                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="rooms-details">{{$room->room_name}}</a>
                                </h5>
                                <ul class="custom-list">
                                    <li>
                                        <a href="#">{{$room->room_type->room_type}}</a> /
                                    </li>
                                </ul>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <span>from ${{$room->room_average_price}}/day</span>
                            </div>
                       </header>
                        <!-- Paragraph -->
                        <p>{{$room->hotel_name}}</p>
                        <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            @forelse($room->room_facilities as $fac)
                            <li>
                                <i class="fa fa-coffee"></i>
                                <span>{{$fac->room_facility}}</span>
                            </li>
                            @empty
                            <li><span>No facilities mentioned</span></li>
                            @endforelse
                        </ul>
                        <!-- Btn Div-->
                        <div class="btn-div">
                            <a href="rooms-details">
                                <span class="read-more">Ream More</span>
                                <span class="icon-arrow-right2 bg-danger">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Rooms Box End-->
            </div>
            
            @empty
            <p>Currently, hotels are under supervision.</p>
            @endforelse
        </div>
    </div>
</div>
<!-- Recent Rooms End-->
<!-- Short Intro Start-->
<div class="short-intro">
    <div class="container">
        <div class="short-intro-inner">
            <!-- Image-->

            <span class="crown"><i class="flaticon-royalty-crown"></i></span>
            <h1><span>It's time to enjoy our</span> SPA!</h1>

            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>

            <div class="short-intro-item-image">
                <img src="../images/spa.png" class="img-responsive" alt="group-pic">
            </div>
        </div>
    </div>
</div>
<!-- Short Intro End-->

<!-- Hotel Service-1 Start-->
<div class="hotel-service-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <h5>Stimulate Your Senses</h5>
                    <h3>A Harmony Of Flavours</h3>
                    <p>A favorite haunt for savvy locals and refined travelers alike, the Hotel Empire boasts diverse options for dining and.</p>
                    <p>&nbsp;</p>

                    <h5>Spark The Imagination </h5>
                    <h3>Explore The Marine Life</h3>
                    <p>No holiday is complete without exploring the world beneath the water surrounding Hotel Empire.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <h5>Unique Spa Experience</h5>
                    <h3>Restore Your Well-Being </h3>
                    <p>A deeply personalised spa experience over 15,000 square feet of the ultimate in luxury and tranquility.</p>
                    <p>&nbsp;</p>

                    <h5>Weddings & Honeymoons </h5>
                    <h3>Your Dream Wedding </h3>
                    <p>Dedicated wedding planner, pre wedding spa treatments, ceremony on the beach or in villa.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="home-chef">
                    <img src="../images/home-chef.jpg" class="img-responsive" alt="home-chef">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hotel Service-1 End-->

<!-- New Experrience Start-->
<div class="new-experience">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <div class="new-experience-inner">
                    <h2>GET READY FOR CANDLE NIGHT DINNER</h2>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in ipsum id orci porta dapibus.</p>
                    <a href="#" class="btn btn-fill font-white">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Experrience End-->

<!-- Special Service Start-->
<div class="special-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12 content">
                <h5>Dining Room</h5>
                <h3>Get Ready for the Delicious Dinner</h3>
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec sollicitudin molestie malesuada. Quisque velit nisi,, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                <a href="#" class="btn btn-fill">Read More</a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 special-service-img">
                <img src="../images/special-service-img.jpg" alt="special-service-img" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<!-- Special Service End-->

<!-- Hotel Service-2 Start-->
<div class="hotel-service-2">
    <div class="container">
        <div class="main-title">
            <h1>Our Special Facilities</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <div class="row mgn-btm">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-exercise"></i>
                    <h4>Fitness Facilities</h4>
                    <p>A deeply personalised spa experience over 15,000 square feet of the ultimate in luxury and tranquility.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-massage"></i>
                    <h4>Unique Spa Experience</h4>
                    <p>A deeply personalised spa experience over 15,000 square feet of the ultimate in luxury and tranquility.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-operator"></i>
                    <h4>24/7 Customer Support</h4>
                    <p>No holiday is complete without exploring the world beneath the water surrounding Hotel Empire.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="content">
                    <i class="flaticon-students-couple-full-body-view"></i>
                    <h4>Weddings & Honeymoons</h4>
                    <p>Dedicated wedding planner, pre wedding spa treatments, ceremony on the beach or in villa.</p>
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
                                <h4>Neymar Silva Mark</h4>
                                <span>Customer</span>
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
                                <span>Customer</span>
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
                                <h4>Alina Maikel</h4>
                                <span>Customer</span>
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
                                <h4>Silva Naymar Doe</h4>
                                <span>Customer</span>
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