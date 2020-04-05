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
    return view('home'); //mise en place de l'accueil, un controlleur n'est pas obligatoire
});

Route::get('/utilisateurs_avec_ctrl_simple',           'UserControllerSimple@liste');
Route::get('/form_ajout_utilisateur_avec_ctrl_simple', 'UserControllerSimple@formAjout');
Route::post('/utilisateurs_avec_ctrl_simple',          'UserControllerSimple@sauvegarder');

Route::resource('users',       'UserControllerREST'   );
Route::resource('groupes',     'GroupController'      );
Route::resource('entreprises', 'EntrepriseController' );

Route::get('/tirage', function () {
    dump($_REQUEST);
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/calculer', function () {
    dump($_REQUEST);
});