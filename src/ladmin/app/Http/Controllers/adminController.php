<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{




    public function room()
    {
        return view('admin.room');
    }
    public function roomTypes()
    {
        return view('admin.room-types');
    }
    public function roomReviews()
    {
        return view('admin.room-reviews');
    }
    public function roomImages()
    {
        return view('admin.room-images');
    }
    public function roomFacilities()
    {
        return view('admin.room-facilities');
    }
    
    //
}
