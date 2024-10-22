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
                        Voici notre galerie photo
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <form action="{{route('Postaddgalerie')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="px-5 mt-10">
                        <div class="font-medium text-center text-lg">QUELQUES PHOTOS DE AS-TAM ACADEMY </div>
                    </div>
                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                        <div class="font-medium text-base">Galerie</div>
                        <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Discipline</div>
                                <select name="description" class="input w-full border flex-1">
                                    <option disabled>Nos discipines</option>
                                    <option>Football</option>
                                    <option>Handball</option>
                                    <option>Basketball</option>
                                    <option>Athletisme</option>
                                    <option>Footsalle</option>
                                    <option>Tenis de table</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <div class="mb-2">Photo</div>
                                <input name="photo[]" multiple accept="image/*" type="file" class="input w-full border flex-1" placeholder="Ajouter une photo">
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

