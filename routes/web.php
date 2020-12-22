<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
   
Route::get('/login', function () {
    return view ("auth/login");
});
Route::match(['get', 'post'], '/dashboard', function () {
  return view('dashboard');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route admin
//admin
Route::get('admin.GetAdhesion', 'EntrepriseController@getAdhesion')->name('GetAdhesion');
Route::get('admin.validerProgramme/{id}','EntrepriseController@validerProgramme')->name('validerProgramme');
Route::get('admin.rejeterProgramme/{id}', 'EntrepriseController@rejeterProgramme')->name('rejeterProgramme');
Route::get('admin/addUser', 'UsersController@AddUser')->name('user.add');
Route::post('admin', 'UsersController@store')->name('store.user');
Route::get('admin/user', 'UsersController@index')->name('show.user');
Route::get('admin/userEdit/{id}', 'UsersController@edit')->name('edit.user');
Route::post('admin/userUpdate/{id}', 'UsersController@update')->name('update.user');
Route::get('admin/userDelete/{id}', 'UsersController@destroy')->name('delete.user');
//Demandeur route
Route::get('demandeur.addDemandeur', 'DemandeurController@addDemandeur')->name('add.demandeur');
Route::post('demandeur', 'DemandeurController@storeDemande')->name('store.addDemandeur');
Route::get('demandeur.liste', 'DemandeurController@ListDemandeur')->name('Liste.demandeur');
// profil route
Route::get('demandeur/addProfil{id}','DemandeurProfilController@addProfil')->name('add.profil');
Route::post('demandeurs','DemandeurProfilController@storeProfil')->name('store.addProfil');
Route::get('demandeur/ListProfil', 'DemandeurProfilController@listProfil')->name('ListProfil.demandeur');
//Route::post('','ReferentielController@StoreReferentileWithNiveau')->name('storeRef');
//Route adhésion
Route::get('adhesion.add', 'EntrepriseController@addAdhesion')->name('add.adhesion');
Route::post('adhesion.add', 'EntrepriseController@store')->name('store.adhesion');

//ROUTE ENTREPRISE
Route::get('auth/login', 'AdhesionController@index')->name('auth/login');
Route::get('entreprise.addEntreprise', 'AdhesionController@AddEntreprise')->name('entreprise.add');
Route::post('entreprise.addEntreprise', 'AdhesionController@store')->name('store.entreprise');













