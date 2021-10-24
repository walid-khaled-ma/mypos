<?php
Route::prefix('dashboard')->name('dashboard.')->group(function() {
Route::get('/index', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
});
