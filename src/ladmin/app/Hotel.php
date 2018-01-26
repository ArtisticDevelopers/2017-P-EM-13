<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $primaryKey = "hotel_id";

    public function hotel_facilities()
    {
    	return $facilities = $this->hasMany(Hotel_facility::class, 'hotel_id', 'hotel_id');
    }

    public function hotel_surroundings()
    {
        return $facilities = $this->hasMany(Hotel_surrounding::class, 'hotel_id', 'hotel_id');
    }

    public function rooms()
    {
    	return $rooms = $this->hasMany(Hotel_room::class, 'hotel_id', 'hotel_id');
    }

    public function hotel_type()
    {
    	return $type = $this->hasOne(Hotel_type::class, 'ht_id', 'hotel_type_id');
    }

    public function hotel_images()
    {
        return $images = $this->hasMany(Hotel_image::class, 'hptel_id', 'hotel_id');
    }

    public function hotel_details()
    {
        return $details = $this->hasOne(Hotel_detail::class, 'hotel_id', 'hotel_id');
    }
}
