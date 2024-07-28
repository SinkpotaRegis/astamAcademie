@extends('layout.template')
@section('navbar')


    <!--=================================
    Right menu -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar-menu" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header text-end justify-content-end p-4">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body p-4 p-sm-5 d-flex align-content-between flex-wrap justify-content-center">
          <div class="sidebar-menu">
            <div class="sidebar-logo">
              <a href="index.html">
                <img class="logo img-fluid" src="images/logo.svg" alt="logo">
              </a>
            </div>
            <div class="section-title mt-5">
              <h3 class="title text-white">About us</h3>
              <p class="text-white">Get the oars in the water and start rowing. Execution is the single biggest factor in achievement so the faster and better your execution.</p>
            </div>
            <div class="mt-5">
              <h3 class="mb-3 text-white">Contact Info</h3>
              <p class="text-white">17504 Carlton Cuevas Rd,<br> Gulfport, MS, 39503</p>
              <h2 class="text-white">1-800-555-500</h2>
            </div>
            <div class="social-icon mt-5">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--=================================
      Right menu -->
  
      <!--=================================

        
    
      Contact-Info -->
      <section class="space-ptb">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="message-info bg-primary">
                <div class="section-title">
                <h3>{{ __("Contactez-nous") }}</h3>
                <p class="mb-0 text-white">{{ __("Vous souhaitez obtenir plus de renseignements concernant As Tam Academy ? Laissez nous votre message en complétant le formulaire ci-dessous, nous vous répondrons rapidement.") }}</p>
              </div>
  
                <div class="feature-item feature-info-style-01">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="{{asset('asset/images/svg/email.svg')}}" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h5 class="feature-title">Address</h5>
                    <p class="mb-0">
                      Commune Sèmè Podji, Arr. Djèrègbé
                    </p>
                  </div>
                </div>
  
                <div class="feature-item feature-info-style-01">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="{{asset('asset/images/svg/phone.svg')}}" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h5 class="feature-title">Phone</h5>
                    <span>+229 67 979 001</span>
                    <span>+229 53 001 166</span>
                    <span>+229 47 412 725</span>
                  </div>
                </div>
  
                <div class="feature-item feature-info-style-01 mb-0">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="{{asset('asset/images/svg/location.svg')}}" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h5 class="feature-title">Email</h5>
                    <span>contact@astam-academy-benin.com</span>
                  </div>
                </div>
          
              </div>
            </div>

            @if(!session()->has('message'))
            <form action="/contactmail" method="post">
              @csrf
              <div class="col-lg-7">
                <div class="contact-us-form">
                <div class="section-title">
                  <h3>{{ __('Nous aimerions recevoir de vos nouvelles') }}</h3>
                  <p>{{ __("Mettez les rames dans l’eau et commencez à ramer. L'exécution est le facteur le plus important de réussite, plus vite vous atteindrez les objectifs !") }}</p>
                </div>
                <form>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <input type="text" name="nom" class="form-control" id="first-name" placeholder="Nom">
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
                    </div>
                    <div class="mb-3 col-md-6">
                      <select name="pays" class="form-control basic-select" aria-placeholder="Pays">
                        <option value="1" selected="desabled">Pays</option>
                        <option value="ARM">Armenia</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="HT">Haiti</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PE">Peru</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RW">Rwanda</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="UY">Uruguay</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VN">Viet Nam</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                    </div>
                    <div class="col-lg-12">
                      <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="mt-4">
                   <button class="btn btn-primary" type="submit">Envoie</button>
                   </div>
                </form>
              </div>
            </form>

            @endif

           </div>
          </div>
        </div>
      </section>
      <!--=================================
      Contact-Info -->
  
      <!--=================================
      Contact-Info -->
      <section class="space-pb">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-item feature-info-style-02 feature-info-center">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="images/svg/shipping.svg" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h4 class="feature-title">Devise</h4>
                    <p class="mb-0">
                        {{ __('Nous nous définissons en trois mots') }}
                        {{ __('Foi - Discipline - Travail') }}
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item feature-info-style-02 feature-info-center">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="images/svg/headphone.svg" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h4 class="feature-title">{{ __('Assistance 7j/7') }}</h4>
                    <p class="mb-0">
                        {{ __('Notre équipe est prête et disponible pour vous aider.') }}
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-item feature-info-style-02 feature-info-center mb-0">
                  <div class="feature-icon">
                    <object type="image/svg+xml" data="images/svg/return-customer.svg" class="icon"></object>
                  </div>
                  <div class="feature-content">
                    <h4 class="feature-title">As-Tam</h4>
                    <p class="mb-0">
                      {{ __('Tout le nécessaire pour un accompagnement réussi.') }}
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Contact-Info -->
  
      <!--=================================
      Map -->
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 p-0">
              <iframe class="w-100 border-0 map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185456!2d144.95373631584474!3d-37.81720974201458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1598418458630!5m2!1sen!2sin" style="border:0; width: 100%; height: 500px;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Map -->
  
@endsection