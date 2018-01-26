<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotel extends Controller
{
    //
    
    public function index2()
    {
        return view('hotel.index2');
    }
    public function about()
    {
        return view('hotel.about');
    }
    public function contact()
    {
        return view('hotel.contact');
    }

    public function roomlist()
    {
        return view('hotel.roomlist');
    }
    public function roomgrid()
    {
        return view('hotel.roomgrid');
    }
    public function roomdetails()
    {
        return view('hotel.roomdetails');
    }
    public function service()
    {
        return view('hotel.service');
    }
    public function shoppingcart()
    {
        return view('hotel.shoppingcart');
    }
    public function checkout()
    {
        return view('hotel.checkout');
    }
    public function invoice()
    {
        return view('hotel.invoice');
    }
    public function login()
    {
        return view('hotel.login');
    }
    public function signup()
    {
        return view('hotel.signup');
    }
    public function forgotpassword()
    {
        return view('hotel.forgotpassword');
    }
    public function error404()
    {
        return view('hotel.error404');
    }
    public function bloglist_sidebar()
    {
        return view('hotel.bloglist-sidebar');
    }
    public function bloglist()
    {
        return view('hotel.bloglist');
    }
    public function blog_sidebar()
    {
        return view('hotel.blog-sidebar');
    }
    public function blog()
    {
        return view('hotel.blog');
    }

}
