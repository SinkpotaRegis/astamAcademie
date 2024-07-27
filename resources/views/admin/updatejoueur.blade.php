@extends('layout.admintemplate')
@section('entete')


            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
    
                </div>
                <!-- END: Top Bar -->
                <div class="flex items-center mt-8">
                    <h2 class="intro-y text-lg font-medium mr-auto">
                        Enregistrer un Joueur | joueuse
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <form action="{{route('Updatejoueur')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="px-5 mt-10">
                        <div class="font-medium text-center text-lg">AS-TAM ACADEMY </div>
                    </div>
                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                        <div class="font-medium text-base">Profil</div>
                        <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <input type="text" name="id" value="{{$joueurs->id}}" hidden>
                                <div class="mb-2">Nom</div>
                                <input name="nom" type="text" value="{{$joueurs->nom}}" class="input w-full border flex-1" placeholder="Nom">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Prénoms</div>
                                <input name="prenom" type="text" value="{{$joueurs->prenom}}" class="input w-full border flex-1" placeholder="Prénoms">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Type</div>
                                <select name="type"value="{{$joueurs->type}}"  class="input w-full border flex-1">
                                    <option>{{$joueurs->type}}</option>
                                    <option>Joueur</option>
                                    <option>Joueuse</option>
                                </select> 
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Poste</div>
                                <input name="poste" value="{{$joueurs->poste}}" type="text" class="input w-full border flex-1" placeholder="Ex: Aillier gauche">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Catégorie</div>
                                <select name="categorie" value="{{$joueurs->categorie}}" class="input w-full border flex-1">
                                    <option>{{$joueurs->categorie}}</option>
                                    <option>U9</option>
                                    <option>U11</option>
                                    <option>U13</option>
                                    <option>U15</option>
                                    <option>U17</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Photo</div>
                                
                                <input name="photo" value="{{$joueurs->photo}}" type="file" class="input w-full border flex-1" placeholder="Ajouter une photo">
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Modifier</button>
                                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2"><a href="{{route('getlistejoueur')}}">Annuler</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!-- END: Wizard Layout -->
            </div>
            <!-- END: Content -->
    

@endsection