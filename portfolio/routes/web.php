<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Development-only SEO debug route. Shows the rendered SEO partial for quick verification.
Route::get('/_debug/seo', function () {
    if (! app()->environment('local')) {
        abort(404);
    }

    return response()->view('debug.seo');
});
