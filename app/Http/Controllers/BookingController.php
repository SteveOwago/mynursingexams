<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book()
    {
        return view('bookings');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:100",
            "email" => "required|string|max:50",
            "phone" => "required|string|max:20",
            "date" => "required|string|max:15",
            "message" => "required|string|max:200",
        ]);
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "date" => $request->date,
            "message" => $request->message
        ];
        Booking::create($data);
        //Send Email Data
        return to_route('bookings')->with('success','Bookings Submitted Successfull. Our team shall reach you with more details');
    }
}
