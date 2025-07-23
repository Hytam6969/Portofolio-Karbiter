<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact; 

// Halaman utama
Route::view('/', 'home');

// Halaman proyek
Route::view('/projects', 'projects');

// Halaman contact (GET)
Route::view('/contact', 'contact');

// Halaman projects
Route::view('/projects', 'projects');
// Halaman Zani
Route::view('/zani', 'zani');
// Halaman Phoebe
Route::view('/phoebe', 'phoebe');

// Proses form contact (POST)
Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name'    => 'required|string|min:3|max:50',
        'email'   => 'required|email|max:100',
        'phone'   => 'nullable|string|max:20',
        'address' => 'nullable|string|max:100',
        'message' => 'required|string|min:10|max:500',
    ]);

    Contact::create($validated);

    return back()->with('success', 'Pesan berhasil dikirim!');
})->middleware('throttle:3,1');

