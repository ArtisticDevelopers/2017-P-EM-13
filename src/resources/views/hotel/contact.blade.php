@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>Contact Us</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="contact" class="btn btn-fill btn-default">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- contact us body Start-->
<div class="contact-us-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <!-- Contact Form Start -->
                <div class="contact-form">
                    <!-- Header-->
                    <div class="header">
                        <h3>Send Us An Email</h3>
                        <p>Donec non luctus turpis. Curabitur ut diam a turpis hendrerit aliquam. Nullam blandit bibendum turpis quis consequat. Nunc rhoncus neque ut quam venenatis consequat. Sed mollis facilisis consectetur. Curabitur purus ipsum, hendrerit id iaculis sed, congue facilisis dolor. Mauris aliquet tristique lacus vel pretium.</p>
                    </div>
                    <form id="contact_form" action="index" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="full-name" class="input-text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" placeholder="Enter Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group send-btn">
                                    <button type="submit" class="btn-submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- Contact Details-->
                <div class="contact-details">
                    <!-- Header-->
                    <div class="header">
                        <h3>Contact Details</h3>
                        <p>Have some questions or have problems with online reservations? You may easily contact us through contacts below.</p>
                    </div>
                    <!--  Contact-details-box-->
                    <div class="media contact-details-box">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h5>Office Address </h5>
                            <p>Lorem Ipsum is simply dummy text printing and type setting industry 5562. po alpu</p>
                        </div>
                    </div>
                    <!--  Contact-details-box-->
                    <div class="media contact-details-box">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5>Phone </h5>
                            <p>
                                <a href="tel:0477-0477-8556-552">office: 55 4XX-634-7071</a>
                            </p>
                            <p>
                                <a href="tel:+55-417-634-7071">Mobile: +55 4XX-634-7071</a>
                            </p>
                        </div>
                    </div>
                    <!--  Contact-details-box-->
                    <div class="media contact-details-box">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h5>Email</h5>
                            <p>
                                <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                            </p>
                            <p>
                                <a href="mailto:info@themevessel.com" target="_blank">info@themevessel.com</a>
                            </p>
                        </div>
                    </div>
                    <!-- Social List-->
                    
                    <div class="social-list clearfix">
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

                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-us-body End-->
@endsection