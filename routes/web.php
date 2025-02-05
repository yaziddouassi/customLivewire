<?php

use Illuminate\Support\Facades\Route;


Route::middleware('web')->group(function () {
   
    Route::get('/page1',\Rabahlivewire\Rabahlivewire\Livewire\Comp1::class);
  
});
