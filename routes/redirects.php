<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/terms-of-service', function () {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-tos/terms');
})->name('terms.show');

Route::get('/tos', function () {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-tos/terms');
})->name('tos.show');

Route::get('/privacy-policy', function () {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-privacy-policies/policy');
})->name('policy.show');

Route::get('/privacy', function () {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-privacy-policies/policy');
})->name('privacy.show');

Route::get('/groups', function () {
    return redirect('https://groups.zaimea.com');
})->name('groups.show');

Route::get('/groups/login', function () {
    return redirect('https://groups.zaimea.com/login');
})->name('groups.login');

Route::get('/groups/register', function () {
    return redirect('https://groups.zaimea.com/register');
})->name('groups.register');