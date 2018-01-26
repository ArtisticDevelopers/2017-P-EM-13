<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_room extends Model
{
	protected $primaryKey = "hr_id";

    public function room_facilities()
    {
    	return $facilities = $this->hasMany(Hotel_room_facility::class, 'room_id', 'hr_id');
    }

    public function room_type()
    {
    	return $type = $this->hasOne(Hotel_room_type::class, 'hrt_id', 'room_type_id');
    }

    public function room_images()
    {
    	return $images = $this->hasMany(Hotel_room_image::class, 'hri_id', 'room_id');
    }
}
