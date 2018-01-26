@extends('layouts.app')

@section('content')
<!-- Blog Banner Start -->
<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog Single Sidebar</h2>
                <a href="index" class="home">Home</a>
                <a class="m0">/</a> 
                <a>Blog Single Sidebar</a>   
            </div>
        </div>
    </div>
</div>
<!-- Blog Banner End -->

<!-- Blog Body Start -->
<div class="blog-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- Blog Box Start -->
                <div class="thumbnail blog-box clearfix">
                    <img src="/images/blog-01.jpg" alt="blog-01">
                    <!-- detail -->
                    <div class="caption detail">
                        <h1 class="title">
                            <a href="blog-single">Cras malesuada pretium</a>
                        </h1>
                        <div class="header">
                            BY <a href="#">John Doe</a> <i class="fa fa-clock-o"></i> 8 MAY 2016<i class="fa fa-bars"></i> <a href="#">Travel</a>, <a href="#">Portrait</a>, <a href="#">Wedding</a> <i class="fa fa-commenting-o"></i> <a href="#">3 Comment</a>
                        </div>
                        <!-- paragraph -->
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing 
                        </p>
                        <p>
                            But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <p>
                            But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                            <div class="blog-theme">
                                <img src="/images/blog-5.jpg" alt="blog-5" class="img-responsive">
                            </div>
                            <blockquote>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. But also the leap into electronic typesetting, remaining essentially unchanged. It was 
                            </blockquote>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. But also the leap into electronic typesetting, remaining essentially unchanged. It was 
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. But also the leap into electronic typesetting, remaining essentially unchanged. It was 
                        </p>
                        <ul>
                            <li>Amet pellentesque eu augue</li>
                            <li>Magnis dis parturient montes ridiculus</li>
                            <li>Ullamcorper efficitur amet eleifend</li>
                        </ul>

                        <div class="clearfix">
                            <div class="tags-box">
                                <h2 class="sub-title">Tags</h2>
                                <a href="#" class="tags">Travels</a>
                                <a href="#" class="tags">Activity</a>
                                <a href="#" class="tags">Flyghls</a>
                                <a href="#" class="tags">Restaurant</a>
                            </div>
                            <div class="blog-share">
                                <ul>
                                    <li class="bordered-right">
                                        <h6>Share:</h6>
                                    </li>
                                    <li class="bordered-right ">
                                        <a href="#">
                                            <i class="fa fa-facebook color-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="bordered-right">
                                        <a href="#">
                                            <i class="fa fa-twitter color-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="bordered-right">
                                        <a href="#">
                                            <i class="fa fa-google-plus color-google"></i>
                                        </a>
                                    </li>
                                    <li class="bordered-right">
                                        <a href="#">
                                            <i class="fa fa-linkedin color-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest color-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comments Thread Start -->
                <div class="comments-thread clearfix">
                    <h2 class="sub-title mrg-btm">Comments Section</h2>
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
                            <!-- Comment -->
                            <div class="comment">
                                <div class="avatar">
                                    <img src="/images/profile-02.jpg" alt="profile-02">
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
                                    <h4>Maria Morris</h4> 
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
                <!-- Comments Thread End -->
                
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
                                <textarea class="input-text" name="message" placeholder="Write Message"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comments Form End -->
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="sidebar">
                    <!-- Recent News Start -->
                    <div class="Recent-news mgn-btm">
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
                    <!-- Recent News End -->
                
                    <!-- Popular Rooms Start -->
                    <div class="Recent-news popular-rooms mgn-btm">
                        <!-- Title-->
                        <h2 class="title">Popular Rooms</h2>
                    
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
                    <!-- Recent News End -->
                
                    <!-- Recent Comments Start-->
                    <div class="recent-comments mgn-btm">
                        <h2 class="title"> Recent Comments</h2>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/recent-comments-pic.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  
                                </p>
                                <span>By John Dae</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/recent-comments-pic.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                </p>
                                <span>By John Dae</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/recent-comments-pic.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                </p>
                                <span>By John Dae</span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/images/recent-comments-pic.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                </p>
                                <span>By John Dae</span>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Comments End-->

                    <!-- Helping Center Start -->
                    <div class="helping-Center mgn-btm">
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
                    <!-- Helping Center End -->
                </div>
            </div>

        </div>
    </div>    
</div>
<!-- Blog Body End -->
@endsection