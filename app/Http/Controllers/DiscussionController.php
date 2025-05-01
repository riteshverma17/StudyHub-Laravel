<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::with('user')->latest()->get();
        return view('discussions', compact('discussions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Discussion::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return redirect()->route('discussions');
    }
}
