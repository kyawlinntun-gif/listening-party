<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function() {
    return view('home');
});

require __DIR__.'/auth.php';
