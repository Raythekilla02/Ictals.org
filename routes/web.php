<?php

use Illuminate\Support\Facades\Route;
Route::view('/archive', 'archive');

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::post('/send-message', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Send email to YOU
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
