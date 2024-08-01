<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MailController;
use App\Models\Apartment;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
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

Route::group(['middleware' => ['locale']], function () {
    Route::get('/', function() {
        $apartments = Apartment::all();
        $chunkedApartments = $apartments->chunk(3);
        return View('yaele-construct-md.home', [
            'apartmentsArray' => $chunkedApartments,
        ]);
    }
    )->name('home');
    Route::get('/apartamente-de-investitie-busteni-valea-prahovei/{id}', [App\Http\Controllers\Controller::class, 'displayApartment']);
    Route::get('/apartamente-de-investitie-busteni-valea-prahovei', function() {
        $apartments = Apartment::all();
        $chunkedApartments = $apartments->chunk(3);
        return View('yaele-construct-md.apartamente-investitie', [
            'apartmentsArray' => $chunkedApartments,
        ]);
    })->name('apartamente-investitie');

    Route::get('/apartamente-de-vanzare-busteni-valea-prahovei', function() {
        $projects = Project::all();
        return View('yaele-construct-md.apartamente-vanzare', [
            'projects' => $projects,
        ]);
    })->name('apartamente-vanzare');

    Route::get('/apartamente-de-vanzare-busteni-valea-prahovei/{id}', [App\Http\Controllers\Controller::class, 'displayProject']);

    Route::get('/proiecte-imobiliare-finalizate', function() {
        return View('yaele-construct-md.proiecte-finalizate');
    })->name('proiecte-finalizate');

    Route::get('/case-de-vanzare-zarnesti-bran', function() {
        return View('yaele-construct-md.case-de-lux');
    })->name('case-de-lux');

    Route::get('/despre-noi', function() {
        return View('yaele-construct-md.despre-noi');
    })->name('despre-noi');

    Route::get('/termeni-si-conditii', function() {
        return View('yaele-construct-md.termeni-si-conditii');
    })->name('termeni');

    Route::get('/politica-confidentialitate', function() {
        return View('yaele-construct-md.politica-confidentialitate');
    })->name('politica');

    Route::get('/contact', function() {
        return View('yaele-construct-md.contact');
    })->name('contact');
});

Route::middleware('throttle:5:1')->group(function() {
    Route::post('/send-mail', [MailController::class, 'index']);
});

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
