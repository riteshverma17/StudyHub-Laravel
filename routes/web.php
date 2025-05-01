<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\DiscussionController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/discussions', [DiscussionController::class, 'index'])->name('discussions');
    Route::post('/discussions', [DiscussionController::class, 'store'])->name('discussions.store');
});

use App\Http\Controllers\NoteController;

Route::get('/notes', [NoteController::class, 'index'])->name('notes');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');


use App\Http\Controllers\FeedbackController;

Route::get('/feedback', [FeedbackController::class, 'showForm'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'sendFeedback'])->name('feedback.send');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
