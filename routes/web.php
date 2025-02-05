<?php

use Illuminate\Support\Facades\Route;

/*$directory = base_path('routes'); // Specify the directory
$fileName = 'saphir.php'; // Specify the file name

$filePath = $directory . DIRECTORY_SEPARATOR . $fileName;

if (file_exists($filePath)) {
    require_once $filePath;
} */


Route::middleware('web')->group(function () {
   
    Route::get('/page1',\Rabahlivewire\Rabahlivewire\Livewire\Comp1::class);
  
});
