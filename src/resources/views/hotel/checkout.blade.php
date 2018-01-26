@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>Checkout</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="checkout" class="btn btn-fill btn-default">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Checkout Start -->
<div class="shop-cart">
    <div class="container">
        <!--Checkout-->
        <h1 class="title">Checkout</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!--Shop info-->
                <div class="shop-info">
                    <p>Returning customer? <a href="login">Click here to login</a></p>
                    <p>Have a coupon? <a href="shopping-cart">Click here to enter your code</a></p>
                </div>
                <!--Form-->
                <form>
                    <div class="shop-billing-fields">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="input-text">
                                        <option>United States (US)</option>
                                        <option>United States (US)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="input-text" name="first-name" id="first-name" placeholder="First Name" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="input-text" name="last-name" id="last-name" placeholder="Last Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" class="input-text" name="address" id="email_adresss" placeholder="Email Address" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="input-text" name="address" id="phone_number" placeholder="Phone Number" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Street 1</label>
                                    <input type="text" class="input-text " name="address" id="street1" placeholder="Street 1" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Street 2</label>
                                    <input type="text" class="input-text" name="address" id="street2" placeholder="Street 2" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Town / City</label>
                                    <input type="text" class="input-text" name="city" id="city" placeholder="City" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="input-text">
                                        <option>New York (NY)</option>
                                        <option>Florida (FL)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input type="text" class="input-text" name="city" id="zip" placeholder="Zip Code" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Note</label>
                                    <textarea name="order-comments" id="order-comments" class="input-text" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <!-- Order Review Start -->
                <div class="order-review">
                    <h3>Your Order</h3>
                    <!-- Shop Box Start -->
                    <div class="shop-box">
                        <div class="header clearfix">
                            <div class="product-name">Product</div>
                            <div class="product-total">Total</div>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="product-name">Liv Race Day Short <strong>× 1</strong></div>
                                <div class="product-total">$30.00</div>
                            </li>
                            <li>
                                <div class="product-name">City Pedals Sport <strong>× 1</strong></div>
                                <div class="product-total">$18.00</div>
                            </li>
                            <li>
                                <div class="product-name">Gloss<strong>× 1</strong></div>
                                <div class="product-total">$325.00</div>
                            </li>
                        </ul>
                    </div>
                    <!-- Shop Box End -->
                </div>
                <!-- Order Review End -->

                <!-- Pay Invoice Start -->
                <div class="pay-invoice">
                    <div class="header">
                        Pay Invoice
                    </div>
                    <div class="details">
                        <form action="index">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name Of Card </label>
                                        <input type="text" class="input-text" name="Name of Card" placeholder="Name Or Card" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Card Number</label>
                                        <input type="text" class="input-text" name="valid-card-number" placeholder="Card Number" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Expiration Manth</label>
                                        <select class="input-text">
                                            <option value="">01 (jan)</option>
                                            <option value="">02 (Feb)</option>
                                            <option value="">03 (Mar)</option>
                                            <option value="">04 (Apr)</option>
                                            <option value="">05 (May)</option>
                                            <option value="">06 (jun)</option>
                                            <option value="">07 (jul)</option>
                                            <option value="">08 (sep)</option>
                                            <option value="">09 (Oct)</option>
                                            <option value="">10 (Nov)</option>
                                            <option value="">11 (jan)</option>
                                            <option value="">12 (Dec)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Expiration Year</label>
                                        <select class="input-text">
                                            <option value="">2016</option>
                                            <option value="">2017</option>
                                            <option value="">2018</option>
                                            <option value="">2019</option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                            <option value="">2022</option>
                                            <option value="">2023</option>
                                            <option value="">2024</option>
                                            <option value="">2025</option>
                                            <option value="">2026</option>
                                            <option value="">2027</option>
                                            <option value="">2028</option>
                                            <option value="">2029</option>
                                            <option value="">2030</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-offset-1 col-xs-11">
                                    <div class="form-group">
                                        <label>Cvv Code</label>
                                        <input type="text" class="input-text" name="Cv-code" id="valid-card-number" placeholder="CVV" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="submit" value="Confirm Payment">
                                    </div>
                                </div>
                            </div>
                        </form>                       
                    </div>
                </div>
                    <!-- Pay Invoice End -->
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->
@endsection