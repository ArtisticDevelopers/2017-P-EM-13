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
use App\Hotel_booking;
use App\Hotel_booking_date;
use App\Hotel_room;
use App\Hotel_room_facility;
use App\Hotel_room_image;
use App\Hotel_room_review;
use App\Hotel_room_type;

use App\Traits\Sanitize;
use App\Traits\Verify;
use App\Traits\Database;
use DateTime;

class BookingController extends Controller
{
    use Sanitize, Verify, Database;

    public function book(Request $request)
    {
    	$room_id = $this->sanitize_number($request->room);
    	$name = $this->sanitize_string($request->name);
    	$email = $request->email;
    	$contact = $this->sanitize_string($request->contact);
        $nights = $this->sanitize_number($request->nights);
        $start_date = $request->date;
    	$code = $this->NewBookingCode();

        $book = new Hotel_booking;
        $book->booking_code = $code;
        $book->room_id = $room_id;
        $book->name = $name;
        $book->contact = $contact;
        $book->email = $email;
        $book->save();

        $booking_id = $book->id;
//strtotime('+2 month');
//sprintf("%02d", $i)

        for($i = $nights; $i >= 2; $i--)
        {
            $dd = new DateTime($start_date);
            $dd->modify('+'.$i.' day');
            $bd = new Hotel_booking_date;
            $bd->booking_id = $booking_id;
            $bd->date = $dd->format("Y-m-d");
            $bd->save();

        }
    	   $dd = new DateTime($start_date);
            $bd = new Hotel_booking_date;
            $bd->booking_id = $booking_id;
            $bd->date = $dd->format("Y-m-d");
            $bd->save();
        
            return redirect()->back()->with('status', "Your Booking has been added to our database. Please wait for confirmation");
    }
}
























