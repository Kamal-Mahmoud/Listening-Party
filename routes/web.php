<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'home');

Volt::route("/parties/{listeningParty}" , "pages.parties.show")
->name("parties.show"); // link to new livewireVolt Component

require __DIR__.'/auth.php';
