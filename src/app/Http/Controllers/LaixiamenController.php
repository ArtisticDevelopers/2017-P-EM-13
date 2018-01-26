<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;
use App\Hotel_type;
use App\Hotel_detail;
use App\Hotel_location;
use App\Hotel_status;
use App\Hotel_surrounding;
use App\Hotel_image;
use App\Hotel_facility;

use App\Hotel_room;
use App\Hotel_room_facility;
use App\Hotel_room_image;
use App\Hotel_room_review;
use App\Hotel_room_type;

use App\Traits\Sanitize;
use App\Traits\Verify;
use App\Traits\Database;

class LaixiamenController extends Controller
{
	use Sanitize, Database;

    public function index()
    {
	   	$hotels = $this->random_hotels(3);
    	$rooms = $this->random_rooms(3);
    	//return $rooms;
        return view('hotel.index', compact('hotels', 'rooms'));
    }

    public function show_hotel($hotel_id)
    {
    	$hotel_id = $this->sanitize_number($hotel_id);

    	$hotel = $this->get_hotel($hotel_id);

    	if(count($hotel) == 0)
    	{
    		return redirect()->back()->withErrors(['status' => 'Something went wrong.']);
    	}

    	
    	$hotel_images = Hotel_image::where('hotel_id', '=', $hotel_id)
    		->get();

       	$rooms = Hotel_room::where('hotel_id', '=', $hotel_id)
    		->get();
		
    	return view('hotel.details', compact('hotel', 'hotel_images'));


    }

    public function show_hotels_by_type($type_id)
    {
    	$type_id = $this->sanitize_number($type_id);

    	$type = Hotel_type::where('ht_id', '=', $type_id)
    		->first();

    	if(count($type) == 0)
    	{
    		return redirect()->back()->withErrors(['success'=>"Something went wrong."]);
    	}
    	
    	$hotels = $this->get_hotels('type', $type_id);
    	$types = $this->get_hotel_types();
    	$random_hotels = $this->random_hotels(3);

    	return view('hotel.hotels_by_type', compact('type', 'hotels', 'types', 'random_hotels'));
    }
}






















