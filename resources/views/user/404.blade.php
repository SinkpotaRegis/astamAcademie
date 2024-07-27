@extends('layout.template')
@section('navbar')
<!--=================================
    Error -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center contant-404 mt-4 mt-md-5">
                  <h1>4<span>0</span>4</h1>
                  <h2 class="mb-4">Opps! Page introuvable</h2>
                  <p class="mb-4 mb-md-5 px-3">Can't find what you looking for? Take a moment and do a search below or start from our <a href="{{route('getindex')}}" class=" text-primary">Home Page</a></p>
                  <a href="{{route('getindex')}}" class="btn btn-primary"><i class="fas fa-home me-2"></i>Back to Home</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--=================================
    Error -->

      

      <!--=================================
      Back To Top-->
      <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
      </div>
      <!--=================================
      Back To Top-->
 @endsection