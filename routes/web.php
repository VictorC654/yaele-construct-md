<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Controller::class, 'home'])->name('home');


Route::get('/apartamente-de-investitie-busteni-valea-prahovei', function() {
   return View('yaele-construct-md.apartamente-investitie');
})->name('apartamente-investitie');

Route::get('/apartamente-de-vanzare-busteni-valea-prahovei', function() {
    return View('yaele-construct-md.apartamente-vanzare');
})->name('apartamente-vanzare');

Route::get('/proiecte-imobiliare-finalizate', function() {
   return View('yaele-construct-md.proiecte-finalizate');
})->name('proiecte-finalizate');

Route::get('/case-de-vanzare-zarnesti-bran', function() {
    return View('yaele-construct-md.case-de-lux');
})->name('case-de-lux');

Route::get('/despre-noi', function() {
    return View('yaele-construct-md.despre-noi');
})->name('despre-noi');

Route::get('/contact', function() {
    return View('yaele-construct-md.contact');
})->name('contact');

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
