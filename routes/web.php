<?php

use App\Http\Controllers\MessageController;
use App\Http\Middleware\PageStatMiddleware;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home')->middleware([PageStatMiddleware::class]);

Route::get("/contact", function () {
    return Inertia::render('other/Contact');
})->name('contact')->middleware([PageStatMiddleware::class]);

Route::post("/contact", [MessageController::class, 'store'])->name('contact.store');


// Route::get('/contact-received', function () {
//     return Inertia::render('ContactReceived');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// require __DIR__ . '/settings.php';
// require __DIR__ . '/auth.php';
