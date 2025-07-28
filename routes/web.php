<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact; 

Route::post('/github-webhook', function () {
    $secret = env('GITHUB_WEBHOOK_SECRET', 'karbiter123');
    $signature = request()->header('X-Hub-Signature-256');
    $payload = file_get_contents('php://input');

    // Verifikasi signature
    $hash = hash_hmac('sha256', $payload, $secret);
    if (!hash_equals("sha256=$hash", $signature)) {
        abort(403, 'Invalid signature.');
    }

    // Jalankan script deploy
    $output = shell_exec('bash /var/www/webhooks/deploy.sh 2>&1');
    \Log::info("Deploy output: " . $output);
    return response('Deploy triggered!', 200);
});

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

