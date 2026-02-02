<?php

declare(strict_types=1);

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/terms-of-service', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-tos/terms');
})->name('terms.show');

Route::get('/tos', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-tos/terms');
})->name('tos.show');

Route::get('/privacy-policy', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-privacy-policies/policy');
})->name('policy.show');

Route::get('/privacy', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/docs/site-policy/main/zaimea-privacy-policies/policy');
})->name('privacy.show');

Route::get('/accounts', function (): Redirector|RedirectResponse {
    return redirect('https://accounts.zaimea.com');
})->name('accounts.show');

Route::get('/accounts/register', function () {
    return redirect('https://accounts.zaimea.com/register');
})->name('accounts.register');

Route::get('/accounts/settings', function () {
    return redirect('https://accounts.zaimea.com/user/settings/profile');
})->name('accounts.settings');

if(Str::doesntContain (Request::url(), 'groups.')){
    Route::get('/groups', function (): Redirector|RedirectResponse {
        return redirect('https://groups.zaimea.com');
    })->name('groups.show');

    Route::get('/groups/login', function (): Redirector|RedirectResponse {
        return redirect('https://groups.zaimea.com/login');
    })->name('groups.login');

    Route::get('/groups/register', function (): Redirector|RedirectResponse {
        return redirect('https://groups.zaimea.com/register');
    })->name('groups.register');
}

Route::get('/prices', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/pricing');
})->name('pricing.show');

Route::get('/zaimea/contact', function (): Redirector|RedirectResponse {
    return redirect('https://zaimea.com/contact');
})->name('zaimea.contact');

Route::get('/zaimea/x', function (): Redirector|RedirectResponse {
    return redirect('https://x.com/zaimeacom');
})->name('zaimea.x');

Route::get('/zaimea/discord', function (): Redirector|RedirectResponse {
    return redirect('https://discord.gg/K4kmRrhAbW');
})->name('zaimea.discord');

Route::get('/zaimea/facebook', function (): Redirector|RedirectResponse {
    return redirect('https://www.facebook.com/zaimeacom');
})->name('zaimea.fb');

Route::get('/zaimea/instagram', function (): Redirector|RedirectResponse {
    return redirect('https://www.instagram.com/zaimeacom');
})->name('zaimea.instagram');

Route::get('/zaimea/github', function (): Redirector|RedirectResponse {
    return redirect('https://www.github.com/zaimea');
})->name('zaimea.github');

Route::get('/zaimealabs/github', function (): Redirector|RedirectResponse {
    return redirect('https://www.github.com/zaimealabs');
})->name('zaimealabs.github');