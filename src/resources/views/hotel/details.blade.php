@extends('layouts.app')
@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>{{$hotel->hotel_name}}</h2>
                    <p>{{$hotel->hotel_description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->
<!-- Rooms Details Body Start-->
<div class="rooms-details-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="hotel-details">
                    <!-- Option Bar Start-->
                    <div class="option-bar clearfix">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="section-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="flaticon-royalty-crown"></i>
                                        </div>
                                        <div class="media-body hidden-xs">
                                            <h4>{{$hotel->hotel_name}}</h4>
                                            <div class="border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-price">
                                    <h3>from ${{$hotel->rooms[0]->room_average_price}}</h3>
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Option Bar End-->
                    
                    <!-- Rooms Detail Slider Start-->
                    <div class="rooms-detail-slider simple-slider">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @forelse($hotel_images as $image)
                                    
                                    <div class="item active">
                                        <img src="../../../../uploads/hotel/{{ $image->hotel_image }}" class="thumb-preview" alt="{{$hotel->hotel_name}}">
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg" aria-hidden="true">
                                        <img src="/images/chevron-left.png" alt="chevron-left">
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <img src="/images/chevron-right.png" alt="chevron-right">
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators thumbs visible-lg visible-md">
                                <?php $count = 0; ?>
                                @forelse($hotel_images as $image)
                                <li data-target="#carousel-custom" data-slide-to="{{$count}}" class="active"><img src="../../../../uploads/hotel/{{$image->hotel_image}}" alt="{{$hotel->hotel_name}}"></li>
                                <?php $count++; ?>
                                @empty
                                @endforelse
                                
                            </ol>
                        </div>
                    </div>
                    <!-- Car Detail Slider End-->
                    <br/>
                    <!-- Room Details Start -->
                    <div class="room-specifications clearfix visible-xs">
                        <!-- Option Bar Start -->
                        <div class="option-bar clearfix">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="section-heading">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="flaticon-royalty-crown"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4>{{$hotel->hotel_type}}</h4>
                                                <div class="border"></div>
                                                <p>Check the Deluxe Roomada</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Room Details-End -->
                    <!-- About Room start-->
                    <div class="about-room">
                        <h2 class="title">
                        General Information About Hotel
                        </h2>
                        <p>{{ $hotel->hotel_description }}</p>
                    </div>
                    <!-- About Room End-->
                    <!-- Amenities Start-->
                    <div class="amenities">
                        <h2 class="title">Facilities and Surroundings</h2>
                        <div class="row">
                            
                            
                            @forelse($hotel->hotel_facilities as $fac)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 amenities-box">
                                
                                
                                <i class="flaticon-room-service"></i>&nbsp;&nbsp;&nbsp;{{$fac->hotel_facility}}
                                
                            </div>
                            @empty
                            @endforelse
                            @forelse($hotel->hotel_surroundings as $surr)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 amenities-box">
                                
                                <i class="flaticon-room-service"></i>&nbsp;&nbsp;&nbsp;{{$surr->hotel_surrounding}}
                                
                            </div>
                            @empty
                            @endforelse
                            
                            
                            
                        </div>
                    </div>
                    <div class="amenities">
                        <h2 class="title">Rooms</h2>
                        <div class="row">
                            
                            <?php $rooms = $hotel->rooms; ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 amenities-box">
                                <table class="table table-condensed table-hover table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>Room</th>
                                            <th>Price</th>
                                            <th>Bed type</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($rooms as $room)
                                        <tr>
                                            <td>{{ $room->room_name }}</td>
                                            <td>${{ number_format($room->room_retail_price, 2) }}</td>
                                            <td>{{ $room->bed_type }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#room_modal_{{ $room->hr_id }}" data-room="{{$room->hr_id}}">view</button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr><td>No Rooms</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                
                            </div>
                            ]
                        </div>
                    </div>
                    <!-- About Room End-->
                    
                    <!-- Inside Room Start-->
                    <div class="inside-room">
                        <h2 class="title">Inside Room</h2>
                        <iframe src="https://www.youtube.com/embed/ynYgotFKIpc" allowfullscreen></iframe>
                    </div>
                    <!-- Inside Room End-->
                </div>
                <!-- content div End-->
                <!-- Comments Thread Start-->
                <div class="comments-thread clearfix">
                    <h2 class="title">Comments Section</h2>
                    <ul>
                        <li>
                            <div class="comment">
                                <div class="avatar">
                                    <img src="/images/profile-01.jpg" alt="profile-01">
                                </div>
                                <div class="comment-info">
                                    <h4>Silva Naymar Doe</h4>
                                    <span>
                                        <i>October</i> 20, 2016  at  1:09 <i>pm</i>
                                    </span>
                                </div>
                                <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                <a href="#" title="">Reply</a>
                            </div>
                            <div class="comment">
                                <div class="avatar">
                                    <img src="/images/profile-02.jpg" alt="profile-02">
                                </div>
                                <div class="comment-info">
                                    <h4>Naymar Doe</h4>
                                    <span>
                                        <i>October</i> 20, 2016  at  1:09 <i>pm</i>
                                    </span>
                                </div>
                                <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                <a href="#" title="">Reply</a>
                            </div>
                            <!-- Comment -->
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="avatar">
                                            <img src="/images/profile-03.jpg" alt="profile-03">
                                        </div>
                                        <div class="comment-info">
                                            <h4>Alina Maikel</h4>
                                            <span>
                                                <i>januaryr</i> 4, 2016  at  2:05 <i>pm</i>
                                            </span>
                                        </div>
                                        <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                        <a href="#" title="">Reply</a>
                                        </div><!-- Comment -->
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="avatar">
                                        <img src="/images/profile-04.jpg" alt="profile-04">
                                    </div>
                                    <div class="comment-info">
                                        <h4>Maria Morris</h4>
                                        <span>
                                            <i>September</i> 21, 2016  at  1:05 <i>pm</i>
                                        </span>
                                    </div>
                                    <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                    <a href="#" title="">Reply</a>
                                </div>
                                <!-- Comment -->
                                <div class="comment">
                                    <div class="avatar">
                                        <img src="/images/profile-01.jpg" alt="profile-01">
                                    </div>
                                    <div class="comment-info">
                                        <h4>Silva Naymar</h4>
                                        <span>
                                            <i>September</i> 21, 2016  at  1:05 <i>pm</i>
                                        </span>
                                    </div>
                                    <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                    <a href="#" title="">Reply</a>
                                </div>
                                <!-- Comment -->
                                <ul>
                                    <li>
                                        <div class="comment">
                                            <div class="avatar">
                                                <img src="/images/profile-02.jpg" alt="profile-02">
                                            </div>
                                            <div class="comment-info">
                                                <h4>Alina Maikel</h4>
                                                <span>
                                                    <i>januaryr</i> 4, 2016  at  2:05 <i>pm</i>
                                                </span>
                                            </div>
                                            <p>Praesent rhoncus nunc vitae metus condi tum viverra. Fusce sed estorci condime felis. Ndisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod.</p>
                                            <a href="#" title="">Reply</a>
                                            </div><!-- Comment -->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Comments Thread ENd-->
                        <!-- Comments Form Start -->
                        <div class="contact-form">
                            <div class="header">
                                <h3>SEND US AN EMAIL</h3>
                                <p>Donec non luctus turpis. Curabitur ut diam a turpis hendrerit aliquam. Nullam blandit bibendum turpis quis consequat. Nunc rhoncus neque ut quam venenatis consequat. Sed mollis facilisis consectetur. Curabitur purus ipsum, hendrerit id iaculis sed, congue facilisis dolor. Mauris aliquet tristique lacus vel pretium.</p>
                            </div>
                            <form action="index">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="full-name" class="input-text" placeholder="Full Name">
                                        </div>
                                        <div class="form-group email">
                                            <input type="text" name="Email Address" class="input-text" placeholder="Email Address">
                                        </div>
                                        <div class="form-group phone">
                                            <input type="text" name="phone-number" class="input-text" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group Btn">
                                            <input type="submit" name="submit" class="btn-submit" value="submit now">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comments Form End -->
                    </div>
                    <div class="col-ld-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="details-sidebar">
                            <!-- Room Details Start -->
                            <div class="room-specifications clearfix hidden-xs">
                                <!-- Option Bar Start -->
                                <div class="option-bar clearfix">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="section-heading">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="flaticon-royalty-crown"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>{{$hotel->hotel_type}}</h4>
                                                        <div class="border"></div>
                                                        <p>{{count($hotel->rooms)}} Rooms</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Reviews Box Start -->
                                <div class="reviews-box clearfix">
                                    <ul class="reviews-star-list">
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
                                    <div class="reviews">156 reviews</div>
                                    <a href="#" class="add-review">
                                        <i class="fa fa-plus-circle"></i>Add Review
                                    </a>
                                </div>
                                <div class="reviews-box clearfix">
                                    Address: <br /><strong>{{$hotel->hotel_details->address}}, {{$hotel->hotel_details->post_code}}</strong>
                                </div>
                                
                            </div>
                            <!-- Room Details-End -->
                            
                            <!-- Help Center Start -->
                            <div class="helping-Center">
                                <h2>Need Sparrow Help?</h2>
                                <h5>We Would Be Happy To Help You!</h5>
                                <span>
                                    <a href="tel:+55-417-634-7071">
                                        <i class="fa fa-phone"></i> +55 4XX-634-7071
                                    </a>
                                </span>
                                <p>
                                    <a href="#">info@themevessel.com</a>
                                </p>
                            </div>
                            <!-- Help Center End -->
                            <!-- Reasond Start -->
                            <div class="reasons">
                                <h2>Reasons to Book with us</h2>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="flaticon-paint-palette-and-brush"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Awesome design</h4>
                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="flaticon-needle"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>carefylly handcrafted</h4>
                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="flaticon-operator"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>sustomer support</h4>
                                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Reasond End -->
                            
                            <!-- Recent Post  Start -->
                            <div class="Recent-news you-may-also-like">
                                <h2>Recent Post</h2>
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
                                            <img class="media-object" src="/images/footer-img-3.jpg" alt="footer-img-3">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="rooms-details">Amazing Place</a>
                                        <span>October 18, 2016</span>
                                        <p>$45.000</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post  End -->
                            <!-- Twitter-feed Start-->
                            <div class="twitter-feed">
                                <h2>Twitter Feed</h2>
                                <div class="twitter-update">
                                    "<a href="#">@SmoothThemes</a>Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus
                                    <a href="#">.http://t.co/WHATEVER</a><a href="#">about 2 hours ago</a>
                                    "
                                </div>
                                <br>
                                <div class="twitter-update">
                                    "Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus<a href="#">http://t.co/WHATEVER</a>
                                    <a href="#">about 2 hours ago</a>
                                    "
                                </div>
                            </div>
                            <!-- Twitter-feed End-->
                            <!-- Social List Start -->
                            <div class="social-list social-box clearfix">
                                <h2>Social Media</h2>
                                <a href="#" class="bg-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="bg-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="bg-google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#" class="bg-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#" class="bg-pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                            <!-- Social List End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rooms Details Body End-->
        @forelse($rooms as $room)



        <?php
        $dates = array();
        $temp = array();
        $temp2 = array();

            $today_day = date("d");
            $today_month = date("m");
            $today_year = date("Y");
            $today_date = date("Y-m-d");
            $today_last_day = date("t"); 

            $temp2["month"] = date("F");
            
            for($i = ($today_last_day - $today_day); $i <= $today_last_day; $i++)
            {
                $temp3 = array();
                $date = $today_year."-".$today_month."-".sprintf("%02d", $i);
                $temp3["date"] = $date;

                $checker = 1;
                $see = App\Hotel_booking::join('hotel_booking_dates AS hbd', 'hbd.booking_id', 'hb_id')
                    ->where('room_id','=',$room->hr_id)
                    ->where('date', '=', $date)
                    ->count();
                if($see == 1)
                {
                    $checker = 0;
                }
                $temp3["availability"] = $checker;
                
                $temp2["dates"][] = $temp3;
                //$temp4["date"] = $temp3;
            }
            $temp["dates"] = $temp2;
            //$temp = array();

            $dates[] = $temp;
            $temp2 = array();
            $temp = array();

            $today_day = 1;
            $today_month = date("m", strtotime('+1 month'));
            $today_year = date("Y", strtotime('+1 month'));
            $today_date = date("Y-m-d", strtotime('+1 month'));
            $today_last_day = date("t", strtotime('+1 month'));

            $temp2["month"] = date("F", strtotime('+1 month'));
            
            for($i = $today_day; $i <= $today_last_day; $i++)
            {
                $temp3 = array();
                $date = $today_year."-".$today_month."-".sprintf("%02d", $i);
                $temp3["date"] = $date;

                $checker = 1;
                $see = App\Hotel_booking::join('hotel_booking_dates AS hbd', 'hbd.booking_id', 'hb_id')
                    ->where('room_id','=',$room->hr_id)
                    ->where('date', '=', $date)
                    ->count();
                if($see == 1)
                {
                    $checker = 0;
                }
                $temp3["availability"] = $checker;
                
                $temp2["dates"][] = $temp3;
                //$temp4["date"] = $temp3;
            }
            $temp["dates"] = $temp2;
            //$temp = array();

            $dates[] = $temp;
            $temp2 = array();
            $temp = array();
            //$next_month = 

            $today_day = 1;
            $today_month = date("m", strtotime('+2 month'));
            $today_year = date("Y", strtotime('+2 month'));
            $today_date = date("Y-m-d", strtotime('+2 month'));
            $today_last_day = date("t", strtotime('+2 month'));

            $temp2["month"] = date("F", strtotime('+2 month'));
            
            for($i = $today_day; $i <= $today_last_day; $i++)
            {
                $temp3 = array();
                $date = $today_year."-".$today_month."-".sprintf("%02d", $i);
                $temp3["date"] = $date;

                $checker = 1;
                $see = App\Hotel_booking::join('hotel_booking_dates AS hbd', 'hbd.booking_id', 'hb_id')
                    ->where('room_id','=',$room->hr_id)
                    ->where('date', '=', $date)
                    ->count();
                if($see == 1)
                {
                    $checker = 0;
                }
                $temp3["availability"] = $checker;
                
                $temp2["dates"][] = $temp3;
                //$temp4["date"] = $temp3;
            }
            $temp["dates"] = $temp2;
            //$temp = array();

            $dates[] = $temp;
            $temp2 = array();
            $temp = array();

        ?>



        <div class="modal fade" id="room_modal_{{$room->hr_id}}" role="dialog">
            <div class="modal-dialog modal-lg">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title">{{$room->room_name}}</h6>
                    </div>
                    <div class="modal-body">
                        
                        <div class="rooms-detail-slider simple-slider">
                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                <div class="carousel-outer">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <?php $room_images = $room->room_images; ?>
                                        @forelse($room_images as $image)
                                        
                                        <div class="item active">
                                            <img src="../../../../uploads/room/{{ $image->room_image }}" class="thumb-preview" alt="{{$room->room_name}}">
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                        <span class="slider-mover-left no-bg" aria-hidden="true">
                                            <img src="/images/chevron-left.png" alt="chevron-left">
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                            <img src="/images/chevron-right.png" alt="chevron-right">
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators thumbs visible-lg visible-md">
                                    <?php $count = 0; ?>
                                    @forelse($room_images as $image)
                                    <li data-target="#carousel-custom" data-slide-to="{{$count}}" class="active"><img src="../../../../uploads/hotel/{{$image->room_image}}" alt="{{$room->room_name}}"></li>
                                    <?php $count++; ?>
                                    @empty
                                    @endforelse
                                    
                                </ol>
                            </div>
                        </div>
                        <hr />
                        <div class="about-room">
                            <p class="title">
                                <strong>General Information About Room</strong>
                            </p>
                            <p>{{ $room->room_descriptipn }}</p>
                        </div>
                        <!-- About Room End-->
                        <!-- Amenities Start-->
                        <div class="amenities">
                            <p class="title"><strong>Facilities</strong></p>
                            <div class="row">
                                
                                
                                @forelse($room->room_facilities as $fac)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 amenities-box">
                                    
                                    
                                    <i class="flaticon-room-service"></i>&nbsp;&nbsp;&nbsp;{{$fac->room_facility}}
                                    
                                </div>
                                @empty
                                @endforelse
                                
                                
                            </div>
                        </div>
                        <hr />
                        <h6>BOOKING</h6>
                        <form method="POST" action="/book/hotel/room">
                            {{ csrf_field() }}
                            <input type="text" class="hidden" name="room" value="{{ $room->hr_id }}" required>
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" required/>
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required/>
                            <label>Contact</label>
                            <input type="text" class="form-control" name="contact" required/>
                            <label>Number of nights</label>
                            <input type="number" class="form-control" name="nights" required/>
                            <br />

                            <hr />



<h6>Pick date</h6>
<div class="row">
    <?php $count=0; ?>
                            @forelse($dates as $d)
                            <div class="col-md-12">
                                <p>{{ $d['dates']['month'] }}</p>
                                <div class="row">
                                @forelse($d['dates']['dates'] as $dd)
                                <?php $count++; ?>
                                <div class="col-md-2 date_box" style="text-align: center;">
                                    @if($dd['availability'] == 0)
                                        <p>{{date_format(new DateTime($dd['date']), "D, dS")}}
                                            <br />
                                            Unavailable
                                        </p>
                                    @else($dd['availability'] == 1)
                                        <label for="date_{{$count}}">{{date_format(new DateTime($dd['date']), "D, dS")}}</label>
                                        <br />
                                        <input type="radio" id="date_{{$count}}" required name="date" value="{{ $dd['date'] }}" />
                                    @endif
                                </div>  
                                @empty
                                No dates in this month
                                @endforelse
                                </div>
                            </div>
                            @empty
                            @endforelse
</div>





                            <hr/>
                            <input type="submit" value="BOOK NOW" class="btn btn-danger">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                
            </div>
        </div>
        @empty
        @endforelse

        <style>
            .date_box
            {
                height: 70px;
                border: 1px solid lightgrey;
            }
        </style>





        @endsection