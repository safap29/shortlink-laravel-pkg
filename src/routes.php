<?php

use Illuminate\Support\Facades\Route;

Route::get('generate-shorten-link', [\Packafa\ShortLink\Http\Controllers\ShortLinkController::class, 'index']);
Route::post('generate-shorten-link', [Packafa\ShortLink\Http\Controllers\ShortLinkController::class, 'store'])->name('generate.shorten.link.post');
Route::get('{code}', [Packafa\ShortLink\Http\Controllers\ShortLinkController::class, 'shortenLink'])->name('shorten.link');
Route::get('delete/{id}', [Packafa\ShortLink\Http\Controllers\ShortLinkController::class, 'delete'])->name('shorten.link.delete');
