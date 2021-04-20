<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Entreprise &mdash; En Ligne </title>
 
  <link href="{{ asset('assets/css/style/style.css') }}" rel="stylesheet">
</head>
<body>

  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">


    <header class="templateux-navbar" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
            <a href="{{ url('/index') }}" class="animsition-link">Entreprise En Ligne</a>
          </div>
          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a href="{{ url('/index') }}" class="animsition-link">Home</a>
              </li>
              <li><a href="{{ url('/index') }}" class="animsition-link">About</a></li>

              <li>
                <a href="services.html" class="animsition-link">Services</a>
                <ul>
                  <li><a href="#">HR Consulting</a></li>
                  <li><a href="#">Leadership Training</a></li>
                  <li>
                    <a href="#">HR Management</a>
                    <ul>
                      <li><a href="{{ url('/index') }}">Operational Management</a></li>
                      <li><a href="{{ url('/index') }}">Corporate Program</a></li>
                      <li>
                        <a href="{{ url('/index') }}">Service 3</a>
                        <ul>
                          <li><a href="{{ url('/index') }}">Service 1</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="blog.html" class="animsition-link">Blog</a></li>
              <li><a href="contact.html" class="animsition-link">Contact</a></li>
                 @if (Route::has('login'))
                    @auth
                       <li> <a class="btn btn-primary py-3 px-4 mr-3" href="{{ url('/home') }}">Home</a></li>
                    @else
                     <li>   <a class="btn btn-primary py-3 px-4 mr-3" href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                         <li>   <a class="btn btn-primary py-3 px-4 mr-3" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
               
            @endif
            </ul> <!-- .templateux-menu -->

          </nav> <!-- .site-nav -->
          

        </div> <!-- .row -->
      </div> <!-- .container -->
    </header> <!-- .templateux-navba -->
    
    <div class="templateux-cover" style="background-image: url(images/hero_3.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Transformation digitale
 <strong>Création d’entreprise en LIGNE </strong></h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Un parcours d'autorisation 100% digital, 100% traçable avec Zéro papier déposé et Zéro papier délivré.</p>
            <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary py-3 px-4 mr-3">Get Started</a> <a href="#" class="text-white">Learn More</a></p>
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->

  <div class="templateux-section pb-0">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2>Les Leaderships</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/OMPIC.png);">
            <a href="#" class="desc bg-light">
              <h3>OMPIC Admin</h3>
              <span>OMPIC</span>
              <div class="parag">
                <p>Qui gère les services fournis par OMPIC comme les certificats negative</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/dgi.png);">
            <a href="#" class="desc bg-light">
              <h3>DGI Admin </h3>
              <span>DGI</span>
              <div class="parag">
                <p>Qui gère les services fournis par l'Administration DGI comme Reception Statut (PM), Reception Contrat de bail (PM), Reception autorisation(PH), Reception demande IF </p>
              </div>
            </a>
        </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/RC.png);">
            <a href="#" class="desc  bg-light">
              <h3>RC Admin</h3>
              <span>Tribunal de Commerce</span>
              <div class="parag">
                <p>Qui gère les services fournis par Tribunal de Commerce comme la  Réception des immatriculation Regestre de Commerce</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/banque.jpg);">
            <a href="#" class="desc bg-light">
              <h3>Admin Banque</h3>
              <span>CEO and Co-Founder</span>
              <div class="parag">
                <p>celui qui recevoire les fraix payé par le client qui creé l'entreprise </p>
              </div>
            </a>
        </div>
        </div>
  <!--       <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/person_3.jpg);">
            <a href="#" class="desc bg-light">
              <h3>David Wilson</h3>
              <span>CEO and Co-Founder</span>
              <div class="parag">
                <p>Even the all-powerful Pointing has no control about the blind texts</p>
              </div>
            </a>
          </div>
        </div> -->
<!--         <div class="col-6 col-sm-6 col-md-6 col-lg-4">
          <div class="staff" class="staff-img" style="background-image: url(images/person_3.jpg);">
            <a href="#" class="desc bg-light">
              <h3>David Wilson</h3>
              <span>CEO and Co-Founder</span>
              <div class="parag">
                <p>Even the all-powerful Pointing has no control about the blind texts</p>
              </div>
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <div class="templateux-section">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2>Etapes de la création d'entreprise en ligne</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 testimonial-wrap">
          <div class="quote">&ldquo;</div>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
                <blockquote class="block-testomonial">
                <p>&ldquo;C’est un document qui atteste que la dénomination, sigle ou enseigne demandé n’est pas déjà utilisé et peut être donc inscrite pour l’immatriculation au Registre du Commerce. C’est la 1ère pièce nécessaire à la création d’une entreprise.
                &rdquo;</p>
                <p><cite>Certificat négatif</cite></p>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testomonial">
                <p>&ldquo;Le statut est un ensemble de dispositions contractuelles, légales qui définissent les règles impersonnelles et objectives applicables à une situation juridique déterminée. Le statut peut être un acte notarié : rédigé par un notaire à la demande du client ou sous seing privé rédigé par les parties ou par des tiers (fiduciaire ou conseiller juridique…).&rdquo;</p>
                <p><cite>le statut d'entreprise</cite></p>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testomonial">
                <p>&ldquo;C'est l'inscription de la société auprès de l’administration des impôts. Cette étape de la création permet à l’entreprise de choisir son régime fiscal et d'obtenir notamment son identifiant à la taxe professionnelle.&rdquo;</p>
                <p><cite>Taxe Professionelle -- Identification fiscale </cite></p>
              </blockquote>
            </div>

              <div class="item">
              <blockquote class="block-testomonial">
                <p>&ldquo;L’immatriculation au registre du commerce constitue l'acte de naissance de l’entreprise. L’immatriculation au registre du commerce doit être faite dans les trois mois qui suivent la création de la société. L'immatriculation d'une société peut être requise par les gérants ou par les membres des organes d'administration, de direction ou de gestion ou par des mandataires munis des pouvoirs.&rdquo;</p>
                <p><cite>L’immatriculation au Registre du Commerce.</cite></p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->

  </div> <!-- .templateux-section -->

  <div class="templateux-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center mb-5">
          <h2>Avantage d'application</h2>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/004-gear.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Economie et gains de Temps et d’argent :</h3>
              <p>Facilité l'accées et recherche de l’information et éviter Déplacement et faciliter Stockage et Archivage .</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/005-conflict.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Transparence et Fiabilité </h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/006-meeting.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Gain productivité </h3>
              <p>Partage facile  et pas de déplacement</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/007-brainstorming.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Confort de Travail :</h3>
              <p>Réactivité optimale Recherches des données Manipulation des documents Obtention d’information .</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/001-consultation.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Ecologie </h3>
              <p>Pas de stockage papier et Pas de photocopie des documents Pas de déplacement obligatoire</p>
            </div>
          </div> <!-- .block-icon-1 -->
        </div>
   <!--      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
          <div class="media block-icon-1 d-block text-center">
            <div class="icon mb-3">
              <img src="images/flaticon/svg/009-brainstorming-2.svg" alt="Image" class="img-fluid">
            </div>
            <div class="media-body">
              <h3 class="h5 mb-4">Play Video</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div> --> <!-- .block-icon-1 -->
        </div>

      </div>
      <div class="row">

        <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
          <p><a href="#" class="btn btn-black py-3 px-4">More Features</a></p>
        </div>
      </div>
    </div>
  </div> <!-- .templateux-section -->



</div> <!-- .templateux-section -->


<footer class="templateux-footer">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-4 pr-md-5">
        <div class="block-footer-widget">
          <h3>About</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Learn More</h3>
              <ul class="list-unstyled">
                <li><a href="#">How it works?</a></li>
                <li><a href="#">Useful Tools</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Support</h3>
              <ul class="list-unstyled">
                <li><a href="#">FAQ</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>About Us</h3>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="block-footer-widget">
              <h3>Connect With Us</h3>
              <ul class="list-unstyled block-social">
                <li><a href="#" class="p-1"><span class="fas fa-facebook"></span></a></li>
                <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                <li><a href="#" class="p-1"><span class="icon-github"></span></a></li>
              </ul>
            </div>
          </div>
        </div> <!-- .row -->

      </div>
    </div> <!-- .row -->

    <div class="row pt-5 text-center">
      <div class="col-md-12 text-center"><p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="text-danger icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Groupe 2 MSI</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p></div>
    </div> <!-- .row -->

  </div>
</footer> <!-- .templateux-footer -->


</div> <!-- .js-animsition -->


<script  src="{{ asset('assets/js/scripts-all.js')}}"></script>
<script  src="{{ asset('assets/js/main.js')}}"></script>

</body>
</html>