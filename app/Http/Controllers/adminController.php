<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Calendrier;
use Illuminate\Http\Request;
use App\Models\Entraineur;
use App\Models\Galerie;
use App\Models\InfoStage;
use App\Models\Joueur;
use App\Models\Staff;
use App\Models\Video;

class adminController extends Controller
{
    public function adminindex(){
        return view('admin.index');
    }

    public function AddEntraineur(){
        return view('admin.ajoutEntraineur');
    }
    public function Addvideo(){
        return view('admin.video');
    }
    public function ListeEntraineur(){
        $coach = Entraineur::all();
        return view('admin.ListeEntraineur', compact('coach'));
    }

    public function UpdateEntraineur($id){
        $entraineur = Entraineur::find($id);
        return view('admin.updateEntraineur',compact('entraineur','coach'));
    }

    public function UpdateJoueur($id){
        $joueurs = Joueur::find($id);
        return view('admin.updatejoueur',compact('joueurs'));
    }

    public function addcoach(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'titre' => 'required',
            'categorie' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Stocker le fichier
        $path = $request->file('photo')->store('photos', 'public');

        $entraineur = new Entraineur();
        $entraineur->nom = $request->nom;
        $entraineur->prenom = $request->prenom;
        $entraineur->titre = $request->titre;
        $entraineur->categorie = $request->categorie;
        $entraineur->photo = $path;
        $entraineur->save();

        // Retourner une réponse
        return redirect()->back()->with('success', 'Enregistrement effectué avec succes');
    }

    public function AddActulite(Request $request){
        
        $request->validate([
            'titre'=>'required',
            'description'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $actualite = new Actualite();
        $path = $request->file('photo')->store('photos', 'public');

        $actualite->titre = $request->titre;
        $actualite->description = $request->description;
        $actualite->photo = $path;
        $actualite->save();
        return redirect('/actualite');
    }

    public function CoachUpdate(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'titre' => 'required',
            'categorie' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 
        $entraineur = Entraineur::find($request->id);
        // Stocker le fichier
        $path = $request->file('photo')->store('photos', 'public');
        $entraineur->nom = $request->nom;
        $entraineur->prenom = $request->prenom;
        $entraineur->titre = $request->titre;
        $entraineur->categorie = $request->categorie;
        $entraineur->photo = $path;
        $entraineur->update();
        return redirect('/listeentraineur');

    }
    public function JoueurUpdate(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
            'categorie' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $joueur = Joueur::find($request->id);
        // Stocker le fichier
        $path = $request->file('photo')->store('photos', 'public');
       
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->type = $request->type;
        $joueur->poste = $request->poste;
        $joueur->categorie = $request->categorie;
        $joueur->photo = $path;
        $joueur->update();
        return redirect('/listejoueur');

    }


    // public function CoachDelete($id) {
    //     $entraineur = Entraineur::find($id);
    //     $entraineur->delete();
    //     return redirect('/listeentraineur');
    // }

    public function AddJoueur(Request $request){
        $joueur = new Joueur();
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
            'categorie' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Stocker le fichier
        $path = $request->file('photo')->store('photos', 'public');

        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->type = $request->type;
        $joueur->poste = $request->poste;
        $joueur->categorie = $request->categorie;
        $joueur->photo = $path;
        $joueur->save();

        // Retourner une réponse
        return redirect()->back()->with('success', 'Enregistrement effectué avec succes');

    }

    public function ListJoueur(){
        $joueur = Joueur::all();
        return view('admin.ListeJoueur',compact('joueur'));
    }

    public function AjoutJoueur(){
        return view(('admin.ajoutjoueur'));
    }

    // public function deleteJoueur($id){
    //     $joueur = Joueur::find($id);
    //     $joueur->delete();
    //     return redirect('/listejoueur');
    // }

    public function actualite(){
        return view('admin.actualite');
    }

    public function AddStaff(Request $request){
        $staff = new Staff();
        $request->validate([
            'nom'=>'required',
            'titre'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

            // Stocker le fichier
            $path = $request->file('photo')->store('photos', 'public');

            $staff->nom = $request->nom;
            $staff->titre = $request->titre;
            $staff->photo = $path;
            $staff->save();
    
            // Retourner une réponse
            return redirect()->back()->with('success', 'Enregistrement effectué avec succes');
    
    }

    public function AjoutStaff(){
        return view('admin.ajoutStaff');
    }

    public function AddInfosStages(Request $request){
        $Infosstage = new InfoStage();
        $request->validate([
            'titre'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

            // Stocker le fichier
            $path = $request->file('photo')->store('photos', 'public');

            $Infosstage->titre = $request->titre;
            $Infosstage->photo = $path;
            $Infosstage->save();
    
            // Retourner une réponse
            return redirect()->back()->with('success', 'Enregistrement effectué avec succes');
    
    }

    public function InfosStage(){
        return view('admin.infosstage');
    }

    public function Postgalerie(Request $request){
        $Galerie = new Galerie();
        $image = [];
    
        if($files = $request->file('photo')){
            foreach($files as $file){
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                // Enregistre le fichier dans le dossier 'photos' du disque 'public'
                $file_path = $file->storeAs('photos', $image_full_name, 'public');
                $image[] = $file_path;
            }
        }
    
        $Galerie->description = $request->description;
        $Galerie->photo = json_encode($image); // Sauvegarde les chemins sous forme de JSON
        $Galerie->save();
    
        return back()->with('success', 'Images uploaded successfully');
    }

    public function AddGalerie(){
        return view('admin.ajoutgalerie');
    }

    public function AddCalendrier(){
        return view('admin.ajoutcalendrier');
    }

    public function Postcalendrier(Request $request){
        $calendrier = new Calendrier();
        $request->validate([
            'discipline'=>'required',
            'type'=>'required',
            'datematch'=>'required',
            'photoa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photob' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

            // Stocker le fichier
            $path = $request->file('photoa')->store('photos', 'public');
            $path2 = $request->file('photob')->store('photos', 'public');

            $calendrier->discipline = $request->discipline;
            $calendrier->type = $request->type;
            $calendrier->datematch = $request->datematch;
            $calendrier->photoa = $path;
            $calendrier->photob = $path2;
            $calendrier->save();
    
            // Retourner une réponse
            return redirect()->back()->with('success', 'Enregistrement effectué avec succes');
       
    }
    public function Postvideo(Request $request){
        $video = new Video();
        $request->validate([
            'videopath'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'required',
        ]);
        $path = $request->file('photo')->store('photos', 'public');
        $video->videopath = $request->videopath;
        $video->photo = $path;
        $video->description = $request->description;
        $video->save();
    
            // Retourner une réponse
        return redirect()->back()->with('success', 'Enregistrement effectué avec succes');
       
    }
}
