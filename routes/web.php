<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    
    return view('Customer');
})->name('home'); 


Route::get('/customer-page', function () { 
    return view('Customer');
})->name('customer.page'); 


Route::get('/item-page', function () { 
})->name('item.page'); 

Route::get('/order-page', function () { 
})->name('order.page');

Route::get('/order-details-page', function () { 
    return view('OrderDetails');
})->name('order.details.page'); 