<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portal.pages.home.index');
});

Route::get('/properties', function () {
    return view('portal.pages.properties.index');
});

Route::get('/property/details', function () {
    return view('portal.pages.properties.property-detail');
})->name('property.details');


Route::get('/contact',function(){
    return view('portal.pages.contact.index');
});