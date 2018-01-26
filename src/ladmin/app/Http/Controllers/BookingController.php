<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;
use App\Hotel_booking;
use App\Hotel_booking_date;
use App\Hotel_type;
use App\Hotel_detail;
use App\Hotel_location;
use App\Hotel_status;
use App\Hotel_surrounding;
use App\Hotel_image;
use App\Hotel_facility;

use App\User;

use App\Traits\Sanitize;
use App\Traits\Verify;

class BookingController extends Controller
{
    use Sanitize, Verify;


    public function Bookings($filter = "")
    {
    	$bookings = array();

    	if($filter == "")
    	{
    		$filter = "All";
    		$_bookings = User::leftJoin('hotel_bookings AS hb', 'hb.user_id', 'users.id')
    		->join('hotel_rooms AS hr', 'hr.hr_id', 'hb.room_id')
    		->join('hotels AS h', 'h.hotel_id', 'hr.hotel_id')
    		->paginate(20);
    	}
    	if($filter == "new")
    	{
    		
    		$_bookings = User::leftJoin('hotel_bookings AS hb', 'hb.user_id', 'users.id')
    		->join('hotel_rooms AS hr', 'hr.hr_id', 'hb.room_id')
    		->join('hotels AS h', 'h.hotel_id', 'hr.hotel_id')
    		->where('is_active', '=', 1)
    		->where('is_confirmed', '=', 0)
    		->where('is_paid', '=', 0)
    		->paginate(20);
    	}
    	if($filter == "unpaid")
    	{
    		
    		$_bookings = User::leftJoin('hotel_bookings AS hb', 'hb.user_id', 'users.id')
    		->join('hotel_rooms AS hr', 'hr.hr_id', 'hb.room_id')
    		->join('hotels AS h', 'h.hotel_id', 'hr.hotel_id')
    		->where('is_active', '=', 1)
    		->where('is_paid', '=', 0)
    		->paginate(20);
    	}
    	if($filter == "confirmed")
    	{
    		
    		$_bookings = User::leftJoin('hotel_bookings AS hb', 'hb.user_id', 'users.id')
    		->join('hotel_rooms AS hr', 'hr.hr_id', 'hb.room_id')
    		->join('hotels AS h', 'h.hotel_id', 'hr.hotel_id')
    		->where('is_active', '=', 1)
    		->where('is_confirmed', '=', 1)
    		->paginate(20);
    	}
    	if($filter == "deleted")
    	{
    		
    		$_bookings = User::leftJoin('hotel_bookings AS hb', 'hb.user_id', 'users.id')
    		->join('hotel_rooms AS hr', 'hr.hr_id', 'hb.room_id')
    		->join('hotels AS h', 'h.hotel_id', 'hr.hotel_id')
    		->where('is_active', '=', 0)    		->paginate(20);
    	}



    	foreach($_bookings as $b)
    	{
    		$temp = array();
    		$temp['user_id'] = $b->id;
    		$temp['name'] = $b->name;
    		$temp['email'] = $b->email;
    		$temp['contact'] = $b->contact;
    		$temp['hotel'] = $b->hotel_name;
    		$temp['room'] = $b->room_name;
    		$temp['retail_price'] = $b->room_retail_price;
    		$temp['booking_id'] = $b->hb_id;
    		$temp['booking_code'] = $b->booking_code;
    		$temp['room_id'] = $b->room_id;
    		$temp['is_active'] = $b->is_active;
    		$temp['is_paid'] = $b->is_paid;
    		$temp['is_confirmed'] = $b->is_confirmed;

    		$dates = Hotel_booking_date::where('booking_id', '=', $b->hb_id)
    			->get();

    		$temp['dates'] = $dates;

    		$total = 0;
    		foreach($dates as $d)
    		{
    			$total += $b->room_retail_price;
    		}
    		$temp['total'] = $total;

    		$bookings[] = $temp;
    	}
    	//return $bookings;
    	return view('booking.booking', compact('_bookings', 'bookings', 'filter'));
    }


    public function booking_action($action, $booking_id, $value)
    {
    	$action = $this->sanitize_string($action);
    	$booking_id = $this->sanitize_number($booking_id);
    	$value = $this->sanitize_number($value);

    	$check = Hotel_booking::where('hb_id', '=', $booking_id)
    		->count();

    	if($check == 0)
    	{
    		return redirect()->back()->withErrors(['status' => "Something went wrong"]);
    	}

    	if($action == "delete")
    	{
    		Hotel_booking::where('hb_id', '=', $booking_id)
    			->update(
    				[
    					'is_active' => $value
    				]);
    	}

    	if($action == "confirm")
    	{
    		Hotel_booking::where('hb_id', '=', $booking_id)
    			->update(
    				[
    					'is_confirmed' => $value
    				]);
    	}

    	if($action == "paid")
    	{
    		Hotel_booking::where('hb_id', '=', $booking_id)
    			->update(
    				[
    					'is_paid' => $value
    				]);
    	}

    	return redirect()->back()->with('status', "Successfully updated status");
    }
}




















