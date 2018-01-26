<?php

namespace App\Traits;

use App\Hotel;
use App\Hotel_room;
use App\Hotel_room_type;
use App\Hotel_image;
use App\Hotel_room_image;
use App\Hotel_type;
use App\Hotel_booking;
trait Database
{
	public function get_hotels($type = "", $id = "")
	{
		$hotels = "";

		if($type == "")
		{
			$hotels = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
				->where('is_active', '=', 1)
				->where('is_deleted','=',0)
				->get();
		}

		else if($type == "type" && $id != "")
		{
			$hotels = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
				->where('is_active', '=', 1)
				->where('is_deleted','=',0)
				->where('hotel_type_id', '=', $id)
				->get();
		}

		return $hotels;
	}

	public function check_hotel($hotel_id)
	{
		$hotel = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
			->where('is_deleted','=',0)
			->where('hotels.hotel_id','=',$hotel_id)
			->count();

		return $hotel;
	}

	public function get_hotel($hotel_id)
	{
		$hotel = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
			->join('hotel_types AS ht', 'ht.ht_id', 'hotel_type_id')
			->where('is_active', '=', 1)
			->where('is_deleted','=',0)
			->where('hotels.hotel_id','=',$hotel_id)
			->first();

		return $hotel;
	}

	public function get_room_types()
	{
		return $types = Hotel_room_type::all();
	}
	public function get_hotel_types()
	{
		return $types = Hotel_type::all();
	}

	public function random_hotels($random)
    {
    	return $random = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
    		->where('is_active','=',1)
    		->where('is_deleted', '=', 0)
    		->inRandomOrder()->limit($random)->get();
    }

    public function random_rooms($random)
    {
    	return $random = Hotel_room::join('hotels AS h', 'h.hotel_id', 'hotel_rooms.hotel_id')
    		->join('hotel_statuses AS hs', 'hs.hotel_id', 'hotel_rooms.hotel_id')
    		->where('is_active','=',1)
    		->where('is_deleted', '=', 0)
    		->inRandomOrder()->limit($random)->get();
    }

    public static function get_front_image($of, $id)
    {
    	$image = "default_hotel.png";
    	if($of == "hotel")
    	{
    		$images = Hotel_image::where('hotel_id','=',$id)->get();
    	
    		foreach($images as $i)
    		{
    			if($i->is_main == 1)
    			{
    				$image = $i->hotel_image;
    			}
    		}
    	}
    	
    	else if($of == "room")
    	{
    		$images = Hotel_room_image::where('room_id','=',$id)->get();
    	
    		foreach($images as $i)
    		{
    			if($i->is_main == 1)
    			{
    				$image = $i->room_image;
    			}
    		}
    	}
    	
    	return $image;
    }

    public function NewBookingCode()
    {
    	$letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');

    	
    	$code = "";
    	for($i = 1; $i <= 10; $i++)
    	{
    		$rand = rand(0, 24);
    		$code .= $letters[$rand]; 
    	}

    	$check = Hotel_booking::where('booking_code','=', $code)->count();
    	if($check == 1)
    	{
    		NewBookingCode();
    	}
    	else

    	{
    		return $code;
    	}
    }
}