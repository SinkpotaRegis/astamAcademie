@extends('layout.template')
@section('navbar')

  <!--=================================
     Nos infos stages -->
    <section class="space-ptb latest-news latest-news-pattern">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="mb-0 text-white">{{ __('Nos stages academiques et professionnels') }}</h2> 
              <p class="mb-0 text-white">{{ __('Nous avons le plaisir de vous présenter nos différents stages effectués') }}</p> 
            </div>
          </div>
        </div>
        <div class="row mt-5">
          @foreach ($stage as $infos)
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="blog-post post-style-01">
                  <div class="blog-image"> 
                      <h2>{{ $infos->titre }}</h2>
                      <img class="img-fluid" src="{{asset('storage/' . $infos->photo)}}" alt=""> 
                      
                  </div>
              </div>
          </div>
          @endforeach
      </div>
    </section>
<!--=================================
End Nos infos stages -->
<div class="col-lg-7">
    <div class="contact-us-form">
    <div class="section-title">
      <h3>{{ __('Faites vos Stages chez AS-TAM Academy') }}</h3>
      <p>{{ __("Le fonctionnement de ce projet commencera bien évidement par une sélection qui semble évidente eu égard a la croissance du niveau du football dans la région nous travaillons sur d’autres projets qui 
Sont actuellement en cours de l’élaboration et nous invitons à nous rejoindre sur les différents réseaux sociaux pour vour tenir informer de l’évolution de ASTAM
 !") }}</p>
    </div>
    @if(!session()->has('message'))
    <form method="post" action="/stagemail" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="mb-3 col-md-6">
          <input type="text" name="nom" class="form-control" id="first-name" placeholder="Nom et Prénom">
        </div>
        <div class="mb-3 col-md-6">
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3 col-md-6">
          <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" name="poste" class="form-control" id="poste" placeholder="Poste">
          </div>
          <div class="mb-3 col-md-6">
            <input type="text" name="categorie" class="form-control" id="categorie" placeholder=" Catégorie">
          </div>
        <div class="mb-3 col-md-6">
          <select name="pays" class="form-control basic-select" aria-placeholder="Pays d'origine">
            <option value="1" selected="desabled">Pays d'origine</option>
            <option value="ARM">Armenia</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BN">Benin</option>
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
            <option value="GE">Ghana</option>
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
          <textarea class="form-control" rows="5" name="motivation" placeholder="Motivation (Pourquoi choisir ASTAM ?)"></textarea>
        </div>
      </div>
      <div class="mt-4">
        <button class="btn btn-primary" type="submit">Envoyez votre demande</button>
       </div>
    </form>
    @endif
  </div>
  <br> <br> <br>

@endsection