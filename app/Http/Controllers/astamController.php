<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Calendrier;
use App\Models\Entraineur;
use App\Models\fs;
use App\Models\Galerie;
use App\Models\InfoStage;
use App\Models\Joueur;
use App\Models\Staff;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class astamController extends Controller
{   
    public function index(){

        // User::create([
        //     'name'=>'AHOTON Tadagbe',
        //     'email'=>'ahotontadagbe@gmail.com',
        //     'password'=>Hash::make('9185'),
        // ]);
        $video = Video::latest()->take(6)->get();;
        // Seuls les six derniers éléments pourront s'afficher sur la page
        $actualite = Actualite::latest()->take(6)->get();
        return view('user.index', compact('actualite','video'));

        
    }


    public function calendrier(){
        $calendar = Calendrier::latest()->take(10)->get();
        return view('user.calendrier',compact('calendar'));
    }

    public function essai(){
        return view('user.essai');
    }
    public function h404(){
        return view('user.404');
    }


    public function entraineur(){
        $coach = Entraineur::all();
        return view('user.entraineur', compact('coach'));
    }

    public function joueur(){
        $footjoueur = Joueur::all();
        return view('user.joueur', compact('footjoueur'));
    }

    public function ListeActualite(){
        $allactu = Actualite::all();
        return view('user.actualite', compact('allactu'));
    }

    public function stage(){
        $stage = InfoStage::latest()->take(6)->get();
        return view('user.stage',compact('stage'));
    }

    public function histoire(){
        return view('user.histoire');
    }

    public function team(){
        $staff = Staff::all();
        $coach = Entraineur::all();
        return view('user.team',compact('staff','coach'));
    }

    public function Galerie(){
        $album = Galerie::all();
        return view('user.galerie',compact('album'));
    }

    public function detailArticle($id){
        $article = Actualite::findOrFail($id);
        return view('user.detailArticle', compact('article'));
    }
}
