<?php

use App\Http\Livewire\Cars;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Home;
use App\Http\Livewire\Manufacturer as LivewireManufacturer;
use App\Http\Livewire\Manufacturers;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class);

Route::get('/cars', Cars::class);

Route::get('/manufacturers', Manufacturers::class);

Route::get('/categories', Categories::class)->name('categories.index');
