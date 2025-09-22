<?php

use App\Http\Controllers\kdfredesign;
use App\Http\Controllers\kdfredesignSupport;
use App\Http\Controllers\PersonellController;
use Illuminate\Support\Facades\Route;

Route::get('/', [kdfredesign::class ,'index' ]
)->name("main.index");

Route::get('/history', [kdfredesign::class ,'history' ]
)->name("main.history");

Route::get('/contact-us', [kdfredesign::class ,'contact' ]
)->name("main.contact");

Route::get('/services', [kdfredesign::class ,'services' ]
)->name("main.services");

Route::get('/mandate', [kdfredesign::class ,'mandate' ]
)->name("main.mandate");

Route::get('/ranks', [kdfredesign::class ,'ranks' ]
)->name("main.ranks");


Route::prefix('support')->group(
  function (){

    Route::get('', [kdfredesignSupport::class, 'index'])->name('support.index');


    Route::prefix('personell')->group(function(){

      Route::get('/add',[PersonellController::class , 'index'] )->name('support.addpersonellget');

      Route::post('/add',[PersonellController::class , 'create'])->name('support.addpersonellpost');

      Route::prefix('/{personell}')->group(function(){
          Route::get('/edit',[PersonellController::class, 'edit'])->name('support.showpersonell');

          Route::put('/edit',[PersonellController::class, 'update'])->name('support.editpersonell');
      });
      
    });
  }
);