<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PolygonsController;
use App\Http\Controllers\PolylinesController;
use App\Http\Controllers\PublicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/upload-test', function () {
    return '
    <form method="POST" action="/upload-test" enctype="multipart/form-data">
        '.csrf_field().'
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>';
});

Route::post('/upload-test', function (Request $request) {
    $request->validate([
        'image' => 'required|image',
    ]);
    // Simpan file ke storage/app/public/images
    $path = $request->file('image')->storeAs('public/images', 'Gokil.jpg');

    return "File berhasil diupload ke: $path";
});

Route::get('/map', [PointsController::class, 'index']) ->name('map');

Route::get('/table', [TableController::class, 'index']) ->name('table');

Route::resource('points', PointsController::class);

Route::resource('polylines', PolylinesController::class);

Route::resource('polygons', PolygonsController::class);

Route::get('/', [PublicController::class, 'index']) ->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
