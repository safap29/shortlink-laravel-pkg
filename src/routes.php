<?php

use Illuminate\Support\Facades\Route;

Route::get('generate-shorten-link', [\Packafadev\ShortLink\Http\Controllers\ShortLinkController::class, 'index']);
Route::post('generate-shorten-link', [Packafadev\ShortLink\Http\Controllers\ShortLinkController::class, 'store'])->name('generate.shorten.link.post');
Route::get('{code}', [Packafadev\ShortLink\Http\Controllers\ShortLinkController::class, 'shortenLink'])->name('shorten.link');
Route::get('delete/{id}', [Packafadev\ShortLink\Http\Controllers\ShortLinkController::class, 'delete'])->name('shorten.link.delete');
