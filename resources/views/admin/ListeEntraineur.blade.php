@extends('layout.admintemplate')
@section('entete')

            <!-- BEGIN: Content -->
            <div class="content">
  >
                <h2 class="intro-y text-lg font-medium mt-10">
                    Liste des entraineurs
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                        <button class="button text-white bg-theme-1 shadow-md mr-2"> <a href="{{route('getaddentraineur')}}">Ajoter un nouvel entraineur</a> </button>
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button px-2 box text-gray-700">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                            </button>
                        </div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-gray-700">
                                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Users Layout -->
                    @foreach ($coach as $entraineur)
                    <div class="intro-y col-span-12 md:col-span-6">
                        <div class="box">
                            <div class="flex flex-col lg:flex-row items-center p-5">
                                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('storage/' . $entraineur->photo) }}">
                                </div>
                                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                                    <a href="" class="font-medium">{{ $entraineur->nom }} {{ $entraineur->prenom }}</a> 
                                    <div class="text-gray-600 text-xs">{{ $entraineur->titre }} {{ $entraineur->categorie }}</div>
                                </div>
                                <div class="flex mt-4 lg:mt-0">
                                    <button class="button button--sm text-white bg-theme-1 mr-2"><a href="/updateentraineur/{{ $entraineur->id }}">Modifer </a> </button>
                                    {{-- <button class="button button--sm text-gray-700 border border-delete-300"> <a href="/delete-coach/{{ $entraineur->id }}"> Sepprimer </a> </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- END: Pagination -->
                    {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                        <ul class="pagination">
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                            </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li> <a class="pagination__link" href="">1</a> </li>
                            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                            <li> <a class="pagination__link" href="">3</a> </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                            </li>
                        </ul>
                        <select class="w-20 input box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div> --}}
                    <!-- END: Pagination -->
                </div>
            </div>
            <!-- END: Content -->
        </div>

</html>
@endsection