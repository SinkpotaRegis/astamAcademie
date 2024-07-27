@extends('layout.template')
@section('navbar')

<style>
  img {
    height: auto;
    width: 50px;
  }
</style>
    <!--=================================
    Banner -->
    <section class="inner-banner bg-overlay-black-6 bg-holder" style="background-image: url('images/inner-banner/01.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-banner-tittle">
                <h2>Matchs</h2>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('getindex')}}">Accueil</a></li>
                  <li class="breadcrumb-item active">Diversités des matchs</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Banner -->
  
      <!--=================================
      Latest Results -->
      {{-- <section class="space-pt">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <div class="d-lg-flex align-items-center">
                <h3>Ligers</h3>
                <img class="img-fluid ms-0 ms-lg-4 ms-xl-5" src="images/home-01/team-logo-03.png" alt="">        
              </div>
            </div>
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <h5>Premier League</h5>
              <h2><span>03</span> : <span>02</span></h2>
              <div class="time-location"><span class="time"><i class="fa-regular fa-clock"></i>1:30 PM</span><span class="location"><i class="fa-solid fa-location-dot"></i>Maracanã Stadium</span></div>
            </div>
            <div class="col-md-12 col-lg-4 text-center">
              <div class="d-lg-flex align-items-center justify-content-end">
                <img class="img-fluid me-0 me-lg-4 me-xl-5" src="images/home-01/team-logo-04.png" alt="">
                <h3>Cheetahs</h3>                        
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!--=================================
      Latest Results -->   
  
      <section class="space-ptb upcoming-match-table bg-overlay-dark-9" >
        <div class="container position-relative">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h2 class="mb-5 text-white">Calendrier des matchs</h2> 
              </div>
            </div>
          </div>
  @foreach ($calendar as $infos)
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="match-schedule">
        <div class="upcoming-match">
          <label class="title">Match</label>
          <div class="d-flex align-items-center justify-content-center">
            <div class="match-team">
              <img class="" src="{{ asset('storage/' . $infos->photoa) }}" alt="">
            </div>
            <h2 class="px-2 px-lg-3">V.S</h2>
            <div class="match-team">
              <img class="" src="{{ asset('storage/' . $infos->photob) }}" alt="">                  
            </div>
          </div>
        </div>
        <div class="match-date">
          <label class="title">Date-Time</label>
          <span class="date">{{$infos->datematch}}</span>
        </div>
        <div class="tournament">
          <label class="title">Discipline</label>
          <span>{{$infos->discipline}}</span>
        </div>
        <div class="venue">
          <label class="title">Type de match</label>
          <span>{{$infos->type}}</span>
        </div>
        <div class="article"><a href="" class="btn btn-primary">Bon match</a></div>
      </div>

    </div>
  </div>
  @endforeach
        </div>
      </section>
  
      <!--=================================
      Points Table -->
      {{-- <section class="space-pb match-schedule-table" style="background-image: none;">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h2 class="mb-0 text-white">Match Results</h2> 
              </div>
            </div>
          </div>
          <div class="row mt-4 mt-md-5 align-items-center">
            <div class="col-12">            
              <div class="table-responsive">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Match</th>
                      <th scope="col">Results</th>
                      <th scope="col">Tournament</th>
                      <th scope="col">Season</th>
                      <th scope="col">Venue</th>
                      <th scope="col">Article</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5-12-2023</td>
                      <td>8:00 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-01.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-02.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>0 - 0</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Lusail Iconic</td>
                      <td>Preview</td>
                    </tr>
  
                    <tr>
                      <td>6-12-2023</td>
                      <td>12:00 AM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-05.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-06.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>3 - 2</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Al Bayt Stadium</td>
                      <td>  Preview</td>
                    </tr>
  
                    <tr>
                      <td>7-12-2023</td>
                      <td>9:00 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-07.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-08.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>2 - 3</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Al Janoub</td>
                      <td>Preview</td>
                    </tr>
  
                    <tr>
                      <td>8-12-2023</td>
                      <td>11:30 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-01.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-05.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>2 - 0</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Education City</td>
                      <td>Preview</td>
                    </tr>
  
                    <tr>
                      <td>9-12-2023</td>
                      <td>6:30 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-02.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-06.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>0 - 1</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Al Thumama Stadium</td>
                      <td>Preview</td>
                    </tr>
  
                    <tr>
                      <td>10-12-2023</td>
                      <td>8:30 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-01.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-08.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>2 - 2</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Khalifa International</td>
                      <td>Preview</td>
                    </tr>
  
                    <tr>
                      <td>11-12-2023</td>
                      <td>9:30 PM</td>
                      <td>
                        <div class="upcoming-match d-lg-flex align-items-center">
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-05.png" alt="">
                          </div>
                          <h2 class="px-2 px-lg-3">V.S</h2>
                          <div class="match-team">
                            <img class="" src="images/home-01/team-logo-02.png" alt="">                  
                          </div>
                        </div>
                      </td>
                      <td>3 - 1</td>
                      <td>FIFA World Cup</td>
                      <td>2023</td>
                      <td>Lusail Iconic</td>
                      <td>Preview</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!--=================================
      Points Table -->
  
@endsection