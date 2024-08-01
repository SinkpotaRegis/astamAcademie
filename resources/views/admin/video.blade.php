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
                            NOS VIDEOS
                        </h2>
                    </div>
                    <!-- BEGIN: Wizard Layout -->
                    <form action="/add/video" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="intro-y box py-10 sm:py-20 mt-5">
                        <div class="px-5 mt-10">
                            <div class="font-medium text-center text-lg">VIDEOS - AS-TAM ACADEMY </div>
                        </div>
                        <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200">
                            <div class="font-medium text-base">VIDEOS</div>
                            <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                                <div class="intro-y col-span-12 sm:col-span-6">
                                    <div class="mb-2">AJOUTEZ UNE VIDEO</div>
                                    <input name="videopath" type="text" class="input w-full border flex-1" placeholder="Mettez le lien de video">
                                </div>
                                <div class="intro-y col-span-12 sm:col-span-6">
                                    <div class="mb-2">AJOUTEZ UNE PHOTO DE COUVERTURE POUR LA VIDEO</div>
                                    <input name="photo" type="file" class="input w-full border flex-1" placeholder="Photo">
                                </div>
                                <div class="intro-y col-span-12 sm:col-span-6">
                                    <div class="mb-2">AJOUTEZ UNE DESCRIPTION</div>
                                    <textarea name="description" id="" cols="60" placeholder="Une petite description" rows="10"></textarea>
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