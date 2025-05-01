<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Storage;



class NoteController extends Controller
{
   
public function index()
{
    $notes = Note::latest()->get();
    return view('notes', compact('notes'));
}

public function destroy(Note $note)
{
    // Delete the PDF file from storage
    Storage::disk('public')->delete($note->pdf_path);

    // Delete the note from the database
    $note->delete();

    return redirect()->route('notes')->with('success', 'Note deleted successfully!');
}


public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'pdf' => 'required|mimes:pdf|max:2048'
    ]);

    $path = $request->file('pdf')->store('notes', 'public');

    Note::create([
        'title' => $request->title,
        'description' => $request->description,
        'pdf_path' => $path
    ]);

    return redirect()->route('notes')->with('success', 'Note uploaded successfully!');
}

}
