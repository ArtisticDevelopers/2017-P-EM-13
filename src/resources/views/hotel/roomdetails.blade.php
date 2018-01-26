@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>Room Details</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="rooms-details" class="btn btn-fill btn-default">Details</a>
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
                                            <h4>Deluxe Room</h4>
                                            <div class="border"></div>
                                            <p>Checkout the latest deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-price">
                                    <h3>$399,500</h3>
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
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-1.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-2.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-3.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-4.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-5.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-6.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item">
                                        <img src="/images/rooms-detail-slider-7.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    <div class="item active">
                                        <img src="/images/rooms-detail-slider-8.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
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
                                <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="/images/rooms-detail-slider-1.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="/images/rooms-detail-slider-2.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="/images/rooms-detail-slider-3.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="/images/rooms-detail-slider-4.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="/images/rooms-detail-slider-5.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="/images/rooms-detail-slider-6.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="6" class="active"><img src="/images/rooms-detail-slider-7.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="7" class="active"><img src="/images/rooms-detail-slider-8.jpg" alt="Chevrolet Impala"></li>
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
                                                <h4>Deluxe Room</h4>
                                                <div class="border"></div>
                                                <p>Check the Deluxe Room</p>
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
                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.<br><br>
                            Neque porro quisqua. Sed ut perspiciatis unde omnis ste natus error sit voluptatem.</p>

                        <a href="#" class="wishlist-btn">
                            <span class="wishlist-btn-l">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="wishlist-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
                        <a href="#" class="book-btn">
                            <span class="book-btn-l"><i class="fa fa-check"></i></span>
                            <span class="book-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
                    </div>
                    <!-- Room Details-End -->

                    <!-- About Room start-->
                    <div class="about-room">
                        <h2 class="title">
                            General Information About Room
                        </h2>
                        <p> Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae mi. Pellentesque molestie elit bibendum tincidunt semper. Aliquam ac volutpat risus. In felis felis, posuere commodo aliquet eget, sagittis sed turpis. Phasellus commodo turpis non nunc egestas, et egestas felis pretium. Pellentesque dignissim libero vitae tincidunt semper. Nam id ante nisi. Nam sollicitudin, dolor non suscipit feugiat, nibh lacus commodo metus, nec tempus dui velit sagittis velit. Pellentesque elementum risus rhoncus justo porta, at varius odio consequat. Duis non augue adipiscing, posuere quam non, tempus urna.</p>
                    </div>
                    <!-- About Room End-->

                    <!-- Amenities Start-->
                    <div class="amenities">
                        <h2 class="title">Amenities</h2>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 amenities-box">
                                <ul>
                                    <li>
                                        <i class="flaticon-bed"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-room-service"></i>Free Room service
                                    </li>
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi"></i>Free Internet
                                    </li>
                                    <li>
                                        <i class="flaticon-car-parking"></i>Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-balcony"></i>Balcony
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 amenities-box">
                                <ul>

                                    <li>
                                        <i class="flaticon-beach-umbrella-and-hammock"></i>Beach View
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>Flat Screen TV
                                    </li>
                                    <li>
                                        <i class="flaticon-waterpolo"></i>Use of pool
                                    </li>
                                    <li>
                                        <i class="flaticon-ironing"></i>Iron
                                    </li>
                                    <li>
                                        <i class="flaticon-key"></i>Personal Safe
                                    </li>
                                    <li>
                                        <i class="flaticon-person-enjoying-jacuzzi-hot-water-bath"></i>Jacuzzi
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 amenities-box">
                                <ul>
                                    <li>
                                        <i class="flaticon-newspaper"></i>Free Newspaper
                                    </li>
                                    <li>
                                        <i class="flaticon-students-couple-full-body-view"></i>2 Persons
                                    </li>
                                    <li>
                                        <i class="flaticon-hot-coffee-cup-with-hearts"></i>Breakfast Included
                                    </li>
                                    <li>
                                        <i class="flaticon-person-enjoying-jacuzzi-hot-water-bath"></i>Jacuzzi
                                    </li>
                                    <li>
                                        <i class="flaticon-waterpolo"></i>Jacuzzi
                                    </li>
                                    <li>
                                        <i class="flaticon-no-smoking"></i>No Smoking
                                    </li>
                                </ul>
                            </div>
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
                                                <h4>Deluxe Room</h4>
                                                <div class="border"></div>
                                                <p>Check the Deluxe Room</p>
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
                        <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.<br><br>
                        Neque porro quisqua. Sed ut perspiciatis unde omnis ste natus error sit voluptatem.</p>

                        <a href="#" class="wishlist-btn">
                            <span class="wishlist-btn-l">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="wishlist-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
                        <a href="#" class="book-btn">
                            <span class="book-btn-l"><i class="fa fa-check"></i></span>
                            <span class="book-btn-r">ADD TO wish list</span>
                            <div class="clear"></div>
                        </a>
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
                            <a href="#">.https://t.co/WHATEVER</a><a href="#">about 2 hours ago</a>
                            "
                        </div>
                        <br>
                        <div class="twitter-update">
                            "Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus<a href="#">https://t.co/WHATEVER</a>
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
@endsection