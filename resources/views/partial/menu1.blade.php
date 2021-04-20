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