<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=> false]);

Route::get('/praticien', 'HomeController@praticien')->name('praticien');
Route::get('/visiteur', 'HomeController@visiteur')->name('visiteur')->middleware('auth');

Route::get('/medicament', "MedicamentsController@affMedicament")->name('medicament');

Route::post('/modify', 'UsersController@modify')->name('modify');

Route::get('/test', 'VisiteursController@test')->name('test');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/profil', 'HomeController@profil')->name('profil')->middleware('auth');
Route::get('/rapport_visite', 'Rapport_visiteController@affRapport')->name('rapportvisite')->middleware('auth');
Route::get('/rapport_visite/new', 'HomeController@newCompteRendu')->name('newCompteRendu')->middleware('auth');

Route::post('/rapport_visite/save', 'Rapport_visiteController@creerRapport')->name('saveRapport')->middleware('auth');

Route::get('/pdf', function () {
    return view('pages/myPDF');
});

Route::get('/generate-pdf/ {id}/details', [

    'as' => 'PDFController.generatePDF',

    'uses' => 'PDFController@generatePDF',

]);
