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
                        Enregistrer les dernières nouvelles | Actualités
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <form action="{{route('Postaddactualite')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="px-5 mt-10">
                        <div class="font-medium text-center text-lg">AS-TAM ACADEMY </div>
                    </div>
                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                        <div class="font-medium text-base">ACTUALITES</div>
                        <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Titre</div>
                                <input name="titre" type="text" class="input w-full border flex-1" placeholder="Titre">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Desciption</div>
                                <textarea name="description" id="" class="input w-full border flex-1"  cols="10" rows="5"></textarea>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Photo</div>
                                <input name="photo" type="file" class="input w-full border flex-1" placeholder="Ajouter une photo">
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                <button type="submit" class="button w-24 justify-center block bg-theme-1 text-white ml-2">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!-- END: Wizard Layout -->
            </div>
            <!-- END: Content -->
    

@endsection