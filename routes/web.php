<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['web' => 'this is a just api services']);
});
