<?php

namespace App\Traits;

use App\Hotel;
use App\Hotel_room_type;

trait Database
{
	public function get_hotels()
	{
		$hotels = Hotel::join('hotel_statuses AS hs', 'hs.hotel_id', 'hotels.hotel_id')
			->where('is_deleted','=',0)
			->get();

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

	public function get_room_types()
	{
		return $types = Hotel_room_type::all();
	}
}