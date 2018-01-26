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

class RoomController extends Controller
{
    use Sanitize, Verify, Database;

    public function room()
    {
        return view('room.room');
    }



    public function addRoom()
    {
    	$hotels = $this->get_hotels();
    	$types = $this->get_room_types();

    	return view('room.add_room', compact('hotels', 'types'));
    }

    public function addRoomPost(Request $request)
    {
    	$hotel_id = $this->sanitize_number($request->hotel);
    	$name = $this->sanitize_string($request->room);
    	$description = $this->sanitize_string($request->description);
    	$retail = $this->sanitize_string($request->retail);
    	$average = $this->sanitize_string($request->average);
    	$type = $this->sanitize_number($request->type);
    	$breakfast = $this->sanitize_number($request->breakfast);
    	$in_room = $this->sanitize_number($request->room_in);
    	$bed = $this->sanitize_string($request->bed);

    	$check_hotel = $this->check_hotel($hotel_id);
    	if($check_hotel == 0)
    	{
    		return redirect()->back()->withErrors(['status'=>"Something went wrong."]);
    	}

    	$room = new Hotel_room;
    	$room->hotel_id = $hotel_id;
    	$room->room_name = $name;
    	$room->room_retail_price = $retail;
    	$room->room_average_price = $average;
    	$room->bed_type = $bed;
    	$room->breakfast = $breakfast;
    	$room->in_room = $in_room;
    	$room->room_type_id = $type;
    	$room->save();
    	$room_id = $room->id;

    	$facilities = $request->facilities;

    	foreach($facilities as $fac)
    	{
    		$facility = $this->sanitize_string($fac);

    		$facc = new Hotel_room_facility;
    		$facc->room_id = $room_id;
    		$facc->room_facility = $facility;
    		$facc->save();
    	}

    	//dd($request->images);
    	if($this->verify_images($request, 'images'))
    	{
    		$images = $request->images;

    		foreach($images as $image)
    		{
    			$room_image = new Hotel_room_image;
    			$room_image->room_id = $room_id;

           		$image_name = $room_id.".".rand(100000, 99999999).".".time().'.'.$image->getClientOriginalExtension();
           		$destination = public_path()."/uploads/room/";
           		$image->move($destination, $image_name);

           		$room_image->room_image = $image_name;
           		$room_image->save();
    		}           	
    	}
    	else
    	{
    		return redirect()->back()->withErrors(['status' => 'Rules for images: Allowed Extensions => jpg, png, jpeg; Max Size => 2 MB']);
    	}

    	return redirect()->back()->with('status','Room has been added to database successfully.');
    }








    public function roomTypes()
    {
        return view('room.room-types');
    }
    public function roomReviews()
    {
        return view('room.room-reviews');
    }
    public function roomImages()
    {
        return view('room.room-images');
    }
    public function roomFacilities()
    {
        return view('room.room-facilities');
    }
}
