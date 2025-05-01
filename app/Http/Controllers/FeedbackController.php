<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function showForm()
    {
        return view('feedback');
    }

    public function sendFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $adminEmail = env('ADMIN_EMAIL');

        Mail::raw("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}", function ($message) use ($request, $adminEmail) {
            $message->to($adminEmail)
                ->replyTo($request->email, $request->name) // 👈 Set reply-to
                ->subject('New Feedback Received');
        });


        return back()->with('success', 'Feedback sent successfully!');
    }
}
