@extends('layouts.navbarindex')
@section('content4')
@extends('layouts.headerindex')
@section('content5')
<section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Entreprises à la Une</h2>
        </div>
      </div>
      <div class="row">
      @foreach ($recruteurs as $recruteur)
      <div class="col-lg-4 col-md-6 mb-4 pb-2">
                             
                               
                                    <div class="position-relative overflow-hidden">
                                   
  <a href="{{route('showoffre1', ['name' => $recruteur->name])}}"> <img class="img-fluid rounded-top" src="{{ asset('upload/logoo/'.$recruteur->logoo) }}"style="margin-left:60px" >
                                     </a>   <div class="overlay rounded-top bg-dark"></div>
   
                                    </div>
                                    </div>
        @endforeach
      </div>
      </div>
       
    </div>
  </section>
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Dernières offres</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Assistante de direction</h4>
            <p class="text-muted"> Importante entreprise</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Chauffeur démarcheur</h4>
            <p class="text-muted"> Société civile archiconsult</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Chargé du sourcing</h4>
            <p class="text-muted">Bomare company</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Assistante de direction</h4>
            <p class="text-muted">Société civile archiconsult</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Offres d'emploi par région</h2>
        </div>
     
      </div>
    </div>
  </section>
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Histoires de réussite</h2>
       </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>ilas chabane</h4>
            <p class="text-muted">adjoint responsable management qualité chez</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>abdelmadjid abdelli</h4>
            <p class="text-muted">Field Service Engineer chez</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Walid AFFOUNE</h4>
            <p class="text-muted">Coordinateur Recouvrement -Région Est- chez</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@endsection