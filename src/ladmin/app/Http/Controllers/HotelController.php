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

use App\Traits\Sanitize;
use App\Traits\Verify;

class HotelController extends Controller
{
	use Sanitize, Verify;

	private function get_hotels()
	{
		$hotels = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
			->where('is_deleted','=',0)
			->get();

		return $hotels;
	}

	private function check_hotel($hotel_id)
	{
		$hotel = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
			->where('is_deleted','=',0)
			->where('hotels.hotel_id','=',$hotel_id)
			->count();

		return $hotel;
	}


    public function index()
    {
        return view('admin.index');
    }

    public function hotel()
    {
        return view('hotel.hotel');
    }

    public function addhotel()
    {
    	$types = Hotel_type::all();

    	$locations = Hotel_location::all();

        return view('hotel.add_hotel', compact('types', 'locations'));
    }

    public function addHotelPost(Request $request)
    {
    	$name = $this->sanitize_string($request->hotel);
    	$description = $this->sanitize_string($request->description);
    	$address = $this->sanitize_string($request->address);
    	$postal = $this->sanitize_string($request->postal);
    	$type = $this->sanitize_number($request->type);
    	$location = $this->sanitize_string($request->location);

    	$hotel = new Hotel;
    	$hotel->hotel_name = $name;
    	$hotel->hotel_description = $description;
    	$hotel->hotel_type_id = $type;
    	$hotel->hotel_location_id = $location;
    	$hotel->save();
    	$hotel_id = $hotel->id;

    	$details = new Hotel_detail;
    	$details->hotel_id = $hotel_id;
    	$details->address = $address;
    	$details->post_code = $postal;
    	$details->save();

    	$status = new Hotel_status;
    	$status->hotel_id = $hotel_id;
    	$status->is_active = 1;
    	$status->is_deleted = 0;
    	$status->is_recommended = 0;
    	$status->save();

    	$surroundings = $request->surroundings;

    	foreach($surroundings as $surr)
    	{
    		$surrounding = $this->sanitize_string($surr);

    		$surround = new Hotel_surrounding;
    		$surround->hotel_id = $hotel_id;
    		$surround->Hotel_surrounding = $surrounding;
    		$surround->save();
    	}

    	$facilities = $request->facilities;

    	foreach($facilities as $fac)
    	{
    		$facility = $this->sanitize_string($fac);

    		$facc = new Hotel_facility;
    		$facc->hotel_id = $hotel_id;
    		$facc->Hotel_facility = $facility;
    		$facc->save();
    	}

    	//dd($request->images);
    	if($this->verify_images($request, 'images'))
    	{
    		$images = $request->images;

    		foreach($images as $image)
    		{
    			$hotel_image = new Hotel_image;
    			$hotel_image->hotel_id = $hotel_id;

           		$image_name = $hotel_id.".".rand(100000, 99999999).".".time().'.'.$image->getClientOriginalExtension();
           		$destination = public_path()."/uploads/hotel/";
           		$image->move($destination, $image_name);

           		$hotel_image->hotel_image = $image_name;
           		$hotel_image->save();
    		}           	
    	}
    	else
    	{
    		return redirect()->back()->withErrors(['status' => 'Rules for images: Allowed Extensions => jpg, png, jpeg; Max Size => 2 MB']);
    	}

    	return redirect()->back()->with('status','Hotel has been added to database successfully.');
    }

    public function ajax_data($id, $type)
    {
    	$type = $this->sanitize_string($type);
    	$hotel = $this->sanitize_number($id);

    	$check = $this->check_hotel($hotel);

    	if($check == 0)
    	{
    		return "Invalid request";
    	}
    	else
    	{
    		if($type == "details")
    		{
    			$data = Hotel_detail::where('hotel_id','=',$hotel)
    				->first();
    		}
    	}

    	return $data;
    }









    public function hotelDetails()
    {
    	$hotels = $this->get_hotels();

    	return view('hotel.hotel-details', compact('hotels'));
    }
    public function hotelTypes()
    {
        return view('hotel.hotel-types');
    }
    public function hotelSurroundings()
    {
        return view('hotel.hotel-surroundings');
    }
    public function hotelStatusses()
    {
        return view('hotel.hotel-statusses');
    }
    public function hotelReviews()
    {
        return view('hotel.hotel-reviews');
    }
    public function hotelLocations()
    {
        return view('hotel.hotel-locations');
    }
    public function hotelImages()
    {
        return view('hotel.hotel-images');
    }
    public function hotelFacilities()
    {
        return view('hotel.hotel-facilities');
    }
}
