<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'confirmation_email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'booking_code' => 'required|string|max:50',
            'service_quantity' => 'required|integer',
            'total_price' => 'required|integer',
            'pet_type' => 'required|string|max:10',
            'booking_date' => 'required|date',
            'time_slot' => 'required|string|max:20',
            'service_type' => 'required|string|max:255',
            'pet_size' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'number_of_days' => 'nullable|integer',
        ]);

        $booking = new Booking();
        $booking->customer_name = $request->input('customer_name');
        $booking->email = $request->input('email');
        $booking->address = $request->input('address');
        $booking->birth_date = $request->input('birth_date');
        $booking->confirmation_email = $request->input('confirmation_email');
        $booking->phone_number = $request->input('phone_number');
        $booking->booking_code = $request->input('booking_code');
        $booking->service_quantity = $request->input('service_quantity');
        $booking->total_price = $request->input('total_price');
        $booking->pet_type = $request->input('pet_type');
        $booking->booking_date = $request->input('booking_date');
        $booking->time_slot = $request->input('time_slot');
        $booking->service_type = $request->input('service_type');
        $booking->pet_size = $request->input('pet_size');
        $booking->number_of_days = $request->input('number_of_days');
        $booking->save();

        return response()->json(['message' => 'Booking created successfully'], 201);
    }
}
