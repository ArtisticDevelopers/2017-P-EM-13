@extends('layouts.app')

@section('content')
<!-- Blog Banner Start -->
<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Invoice Page</h2>
                <a href="index" class="home">Home</a>
                <a class="m0">/</a>
                <a>Invoice</a>
            </div>
        </div>
    </div>
</div>
<!-- Blog Banner End -->

<!-- Blog Body Start -->
<div class="blog-body">
    <div class="container">
        <div class="invoice-page">
            <div class="invoice-title">
                <h2 class="pull-left">Invoice: #12345</h2>
                <h3 class="pull-right">
                    <a class="invoice-status">STATUS: PAID</a>
                </h3>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Billed To:</strong><br>
                        John Smith<br>
                        client@gmail.com<br>
                        +55 4XX-634-7071<br>
                        1234 Main Apt. 4B<br>
                        Springfield, ST 54321
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Company:</strong><br>
                        The Hotel Empire<br>
                        <a>https://hotelempire.com</a><br>
                        +55 4XX-634-7071<br>
                        1234 Main Apt. 4B<br>
                        Springfield, ST 54321
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        Visa ending **** 4242<br>
                        jsmith@email.com
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Booking Date:</strong><br>
                        Dec 7, 2016
                    </address>
                </div>
            </div>
            <div class="invoice-item">
                <table class="invoice-item-table">
                    <thead>
                    <tr>
                        <th>
                            Product
                        </th>
                        <th>
                            Night
                        </th>
                        <th class="text-right">
                            Total
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border-bottom">
                            <strong>Liv Race Day Short</strong>
                        </td>
                        <td class="border-bottom">
                            2
                        </td>
                        <td class="text-right border-bottom">
                            $155.22
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Room:</strong>
                        </td>
                        <td>
                            <span>STA - KING SUITE</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Checkin Date:</strong>
                        </td>
                        <td>
                            <span>May 5,2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Checkout Date:</strong>
                        </td>
                        <td>
                            <span>May 7,2015</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Guest</strong>
                        </td>
                        <td>
                            <span>2</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="note">
                        <h3>Note</h3>
                        <p>
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-offset-4">
                    <table class="price-table no-border">
                        <tbody>
                        <tr>
                            <td>
                                <strong>VAT</strong>
                            </td>
                            <td class="text-right">
                                <span>$15.99</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Sub-total</strong>(VAT included):
                            </td>
                            <td  class="text-right">
                                <span>155.22</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Order discount:</strong>
                            </td>
                            <td  class="text-right">
                                <span>$15.99</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Grand Total:</strong>
                            </td>
                            <td  class="text-right">
                                <span>$155.22</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="thanks-area">
                <p>
                    For more information on your order please call us on 123 467 8961, or mail us at <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                    <br/>
                    <strong>The Hotel Empire</strong>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Blog Body End -->
@endsection