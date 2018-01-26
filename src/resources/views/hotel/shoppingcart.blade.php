@extends('layouts.app')

@section('content')
<!-- Page Banner Start -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h2>Shopping Cart</h2>
                    <p>Whether you're looking to sell or let your home or want to buy or rent a home, we really are the people for you to come to.</p>
                    <a href="index" class="btn btn-fill">Home</a>
                    <a href="shopping-cart" class="btn btn-fill btn-default">Shopping Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- shopping-cart-body Start-->
<div class="shopping-cart-body">
    <div class="container">
        <div class="row">
            <div class="table">
                <h3 class="title">Shopping Cart</h3>
                <table class="cart-product">
                    <tbody>
                        <tr>
                            <th class="images">
                            </th>
                            <th class="bg name">Room</th>
                            <th class="edit"> </th>
                            <th class="bg price">Per Night</th>
                            <th class="qty">Night</th>
                            <th class="bg subtotal">Subtotal</th>
                            <th class="close"> </th>
                        </tr>
                        <tr>
                            <td class="images">
                                <a href="#">
                                    <img src="/images/spoppinge-home-1.png" alt="spoppinge-home-1" class="img-responsive">
                                </a>
                            </td>
                            <td class="bg name">Paddywax Fragrance Diffuser Set, Gardenia Tuberose,<br> Jasmine, 4-Ounces</td>
                            <td class="edit"><a title="Edit" href="#"><i class="fa fa-pencil"></i>Edit</a></td>
                            <td class="bg price">$75.00</td>
                            <td class="qty"><input type="text" name="qty" value="" placeholder="1000"></td>
                            <td class="bg subtotal">$750.00</td>
                            <td class="close">
                                <a href="#">
                                    <img src="/images/close.png" alt="close">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <a href="#">
                                    <img src="/images/spoppinge-home-2.png" alt="spoppinge-home-2" class="img-responsive">
                                </a>
                            </td>
                            <td class="bg name">California Scents Spillproof Organic Air Fresheners,<br> Coronado Cherry, 1.5 Ounce Cannister</td>
                            <td class="edit"><a title="Edit" href="#"><i class="fa fa-pencil"></i>Edit</a></td>
                            <td class="bg price">$65.00</td>
                            <td class="qty"><input type="text" name="qty" value="" placeholder="1000"></td>
                            <td class="bg subtotal">$230.00</td>
                            <td class="close">
                                <a href="#">
                                    <img src="/images/close.png" alt="close">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="images">
                                <a href="#">
                                    <img src="/images/spoppinge-home-3.png" alt="spoppinge-home-3" class="img-responsive">
                                </a>
                            </td>
                            <td class="bg name">California Scents Spillproof Organic Air Fresheners,<br> Coronado Cherry, 1.5 Ounce Cannister</td>
                            <td class="edit"><a title="Edit" href="#"><i class="fa fa-pencil"></i>Edit</a></td>
                            <td class="bg price">$77.00</td>
                            <td class="qty"><input type="text" name="qty" value="" placeholder="1000"></td>
                            <td class="bg subtotal">$350.00</td>
                            <td class="close">
                                <a href="#">
                                    <img src="/images/close.png" alt="close">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7" class="cart-but">
                                <button class="continue">
                                    <i class="fa fa-chevron-left"></i>Continue Booking</button>
                                <button class="update">
                                    <i class="fa fa-repeat"></i>Update Shopping Cart
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="content-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="bottom-block">
                            <h3>Estimate Shipping and Tax</h3>
                            <p>Enter your destination to get a shipping estimate.</p>
                            <form>
                                <div class="form-group">
                                    <label>Country:</label>
                                    <select class="input-form">
                                        <option>United States</option>
                                        <option>United States</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>State/Province:</label>
                                    <select class="input-form">
                                        <option>Please Select Region stare or province</option>
                                        <option>Please Select Region stare or province</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Zip/Postal Code</label>
                                    <input name="Zip" placeholder="Zip" type="text" class="input-form">
                                </div>
                                <input type="submit" name="submit" class="btn btn-fill btn-md" value="Get a Quote">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="bottom-block">
                            <h3>Discount Codes</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <form>
                                <div class="form-group">
                                    <label>Coupon Code</label>
                                    <input name="Coupon Code" placeholder="Coupon Code" type="text" class="input-form">
                                </div>
                                <input type="submit" name="submit" class="btn btn-fill btn-md" value="Apply Coupon">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="bottom-block">
                            <h4>Subtotal<span>$1, 500.00</span></h4>
                            <h1>Grand Total<span>$1, 500.00</span></h1>
                            <form action="checkout">
                                <input type="submit" name="submit" class=" btn-fill mrg" value="Proceed To Checkout">
                                <h5><a href="#">Checkout with Multiple Addresses</a></h5>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-us-body End-->
@endsection