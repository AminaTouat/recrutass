@extends('layouts.navbarindex')
@extends('layouts.headerindex')
@section('content4')
@section('content5')

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Entreprises à la Une</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-2">
          <img src="img/renault.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/step-confort-logo.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-lg-2">
          <img src="img/intaj.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
           </div>
        <div class="col-lg-2">
          <img src="img/BDS.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
           </div>
           <div class="col-lg-2">
             <a href="pages/read-mail.html">
            <img src="img/Distribution,-Commerce.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}">
          </a>
          </div>
        </div>
      </div>
       
    </div>
  </section>

  <!-- Portfolio Grid -->
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

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Offres d'emploi par région</h2>
        </div>
     
      </div>
    </div>
  </section>

  <!-- Team -->
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

  <!-- Clients -->

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
       </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Recrutass &copy; Your Website d'emploi</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

 
 







@endsection
@endsection