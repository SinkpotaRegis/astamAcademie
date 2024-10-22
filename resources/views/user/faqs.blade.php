@extends('layout.template')
@section('navbar')      
    <!--=================================
    Faqs -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="sidebar">
              <!-- search -->
              <div class="widget mb-4">
                <div class="widget-title">
                  <h5 class="fw-600">Rechercher</h5>
                </div>
                <div class="search">
                  <form class="search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <a href="#" class="btn btn-primary text-uppercase"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </form>
                </div>
              </div>
              <!-- search -->
              <div class="widget">
                <div class="widget-title">
                  <h5 class="fw-600">Soumettez vos questions</h5>
                </div>
                <div class="submit-form">
                  <input type="text" class="form-control mb-3" placeholder="Name">
                  <input type="text" class="form-control mb-3" placeholder="Email">
                  <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="5" placeholder="Message"></textarea>
                  <a href="#" class="btn btn-primary d-block">Envoyer</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="section-title mb-4 mb-md-3">
              <h2>{{ __('Questions fréquemment posées') }}</h2>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Do I really need a realtor when buying a home?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">La motivation n’est pas un accident ou quelque chose que quelqu’un d’autre peut vous donner – vous êtes le seul à avoir le pouvoir de vous motiver. La motivation ne peut pas être une force extérieure, elle doit venir de l’intérieur en tant que produit naturel de votre désir d’accomplir quelque chose et de votre conviction que vous êtes capable d’atteindre votre objectif. Le succès est quelque chose dont nous voulons tous plus.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Commitment is something that comes from understanding that!</li>
                      <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                      <li class="mb-2">his is important because nobody wants to put significant.</li>
                      <li class="mb-2">Effort into something, only to find. </li>
                      <li class="mb-0">Out after the fact that the price was too high.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Who pays the realtor fees when buying a home?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Commitment is something that comes from understanding that!</li>
                      <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                      <li class="mb-2">his is important because nobody wants to put significant.</li>
                      <li class="mb-2">Effort into something, only to find. </li>
                      <li class="mb-0">Out after the fact that the price was too high.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How many homes should I look at before putting in a purchase offer? 
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Commitment is something that comes from understanding that!</li>
                      <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                      <li class="mb-2">his is important because nobody wants to put significant.</li>
                      <li class="mb-2">Effort into something, only to find. </li>
                      <li class="mb-0">Out after the fact that the price was too high.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                How much should I offer the sellers? 
                </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Commitment is something that comes from understanding that!</li>
                      <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                      <li class="mb-2">his is important because nobody wants to put significant.</li>
                      <li class="mb-2">Effort into something, only to find. </li>
                      <li class="mb-0">Out after the fact that the price was too high.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-0">
                <h2 class="accordion-header" id="flush-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                How long does the seller have to respond to my offer? 
                </button>
                </h2>
                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Commitment is something that comes from understanding that!</li>
                      <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                      <li class="mb-2">his is important because nobody wants to put significant.</li>
                      <li class="mb-2">Effort into something, only to find. </li>
                      <li class="mb-0">Out after the fact that the price was too high.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Faqs -->


    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">
      <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <!--=================================
    Back To Top-->
@endsection