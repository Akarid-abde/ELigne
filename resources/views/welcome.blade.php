<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('assets/css/style/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md">
                    Entreprise En Ligne
                </div>

                <header class="templateux-navbar" role="banner">

      <div class="container"  data-aos="fade-down">
        <div class="row">

          <div class="col-3 templateux-logo">
            <a href="index.html" class="animsition-link">HumanResources</a>
          </div>
          <nav class="col-9 site-nav">
            <button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button> <!-- .templateux-toggle -->

            <ul class="sf-menu templateux-menu d-none d-md-block">
              <li class="active">
                <a href="index.html" class="animsition-link">Home</a>
              </li>
              <li><a href="about.html" class="animsition-link">About</a></li>
              <li>
                <a href="services.html" class="animsition-link">Services</a>
                <ul>
                  <li><a href="#">HR Consulting</a></li>
                  <li>
                    <a href="#">HR Management</a>
                    <ul>
                      <li><a href="#">Operational Management</a></li>
                      <li>
                        <a href="#">Service 3</a>
                        <ul>
                          <li><a href="#">Service 1</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="blog.html" class="animsition-link">Blog</a></li>
              <li><a href="contact.html" class="animsition-link">Contact</a></li>
            </ul> 

          </nav> 
          

        </div> 
      </div> 
    </header> 
   


        </div>





<script  src="{{ asset('assets/js/scripts-all.js')}}"></script>
<script  src="{{ asset('assets/js/main.js')}}"></script>
<!-- <script  src="{{ asset('assets/js/jquery-3.3.1')}}"></script>
<script  src="{{ asset('assets/js/style.js')}}"></script> -->
    </body>
</html>
