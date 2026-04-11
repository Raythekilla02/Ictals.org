<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

// Statamic routes
Route::statamic('/', 'home', []);
Route::statamic('/events', 'events', []);
Route::statamic('/archive', 'archive', []);

// Contact form route
Route::post('/send-message', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::raw(
        "New message from ICTALS website:\n\n" .
        "Name: {$data['name']}\n" .
        "Phone: {$data['phone']}\n" .
        "Email: {$data['email']}\n\n" .
        "Message:\n{$data['message']}",
        function ($msg) {
            $msg->to('YOUR_EMAIL_HERE')
                ->subject('New Contact Form Message');
        }
    );

    return back()->with('success', 'Your message has been sent!');
});
