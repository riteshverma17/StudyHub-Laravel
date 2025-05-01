<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw("Name: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}", function ($message) {
            $message->to('riteshjii.04@gmail.com')  // 🔁 Replace with your email
                    ->subject('New Contact Message');
        });

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}

