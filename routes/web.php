<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\astamController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LangageController;
use App\Http\Controllers\StageController;
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


/*
- Route User
*/


/*
- Route Admin
*/
//// Nos routes get
Route::middleware('langage')->group(function () {
    Route::get('/', [astamController::class,'index'])->name('getindex');
    Route::get('essai', [astamController::class,'essai'])->name('getessai');
    Route::get('404', [astamController::class,'h404'])->name('get404');
    Route::get('coming', [astamController::class,'coming'])->name('getcoming');
    Route::get('entraineur', [astamController::class,'entraineur'])->name('getentraineur');
    Route::get('joueur', [astamController::class,'joueur'])->name('getjoueur');
    Route::get('allactualite', [astamController::class,'ListeActualite'])->name('listeactualite');
    Route::get('stage', [astamController::class,'stage'])->name('getstage');
    Route::get('histoire', [astamController::class,'histoire'])->name('gethistoire');
    Route::get('team', [astamController::class,'team'])->name('getteam');
    Route::get('contact', [ContactController::class,'create'])->name('getcontact');
    Route::get('galerie', [astamController::class,'Galerie'])->name('getgalerie');
    Route::get('login', [AuthController::class,'login'])->name('getlogin');
    Route::get('calendrier', [astamController::class,'calendrier'])->name('getcalendrier');
Route::get('/article/{id}', [astamController::class, 'detailArticle'])->name('article.show');


});

Route::get('adminindex', [adminController::class,'adminindex'])->name('getadminindex');
//Route::get('/delete-coach/{id}', [adminController::class,'CoachDelete'])->name('getdeletecoach');
// Route::get('/delete-joueur/{id}', [adminController::class,'deleteJoueur'])->name('getdeletejoueur');
Route::get('/addentraineur', [adminController::class,'AddEntraineur'])->name('getaddentraineur');
Route::get('/addjoueur', [adminController::class,'AjoutJoueur'])->name('getaddjoueur');
Route::get('/addstaff', [adminController::class,'AjoutStaff'])->name('getaddstaff');
Route::get('listeentraineur', [adminController::class,'ListeEntraineur'])->name('getlisteentraineur');
Route::get('listejoueur', [adminController::class,'ListJoueur'])->name('getlistejoueur');
Route::get('/updateentraineur/{id}', [adminController::class,'UpdateEntraineur'])->name('geteditentraineur');
Route::get('/updatejoueur/{id}', [adminController::class,'UpdateJoueur'])->name('geteditjoueur');
Route::get('actualite', [adminController::class,'actualite'])->name('getactualite');
Route::get('infosstage', [adminController::class,'InfosStage'])->name('getinfosstage');
Route::get('addgalerie', [adminController::class,'AddGalerie'])->name('getaddgalerie');
Route::get('addcalendrier', [adminController::class,'AddCalendrier'])->name('getaddcalendrier');
Route::get('video', [adminController::class,'Addvideo'])->name('getvideo');





//// Nos routes POST
Route::post('add/coach', [adminController::class,'addcoach'])->name('Postaddcoach');
Route::post('/add/calendrier', [adminController::class,'Postcalendrier'])->name('Postaddcalendrier');
Route::post('/add/joueur', [adminController::class,'AddJoueur'])->name('Postaddjoueur');
Route::post('/add/video', [adminController::class,'Postvideo'])->name('postevideo');
Route::post('/add/galerie', [adminController::class,'Postgalerie'])->name('Postaddgalerie');
Route::post('/add/infosstage', [adminController::class,'AddInfosStages'])->name('Postinfosstage');
Route::post('/add/staff', [adminController::class,'AddStaff'])->name('PostaddStaff');
Route::post('/add/actualite', [adminController::class,'AddActulite'])->name('Postaddactualite');
Route::post('/update/coach', [adminController::class,'CoachUpdate'])->name('Updatecoach');
Route::post('/update/joueur', [adminController::class,'JoueurUpdate'])->name('Updatejoueur');
Route::post('/contactmail', [ContactController::class,'store'])->name('contactmail');
Route::post('/stagemail', [StageController::class,'store'])->name('stagemail');
Route::post('/dologin/connect', [AuthController::class,'dologin'])->name('dologin');

// Langage
Route::get('/switch-lang/{lang}', [LangageController::class, 'swithLangage'])->name('switch_lang');

Route::get('/test_langs', [LangageController::class, 'translation']);
Route::get('/update-lang', [LangageController::class, 'lastModelsTranslation'])->name('update.lang');

