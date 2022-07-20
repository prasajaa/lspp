<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kursus JWP</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-2 .modal-item.modal {
        top: 2rem;
      }

      .header-2-2 .navbar,
      .header-2-2 .hero {
        padding: 3rem 2rem;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #1d1e3c;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-nav .active>.nav-link,
      .header-2-2 .navbar-light .navbar-nav .nav-link.active,
      .header-2-2 .navbar-light .navbar-nav .nav-link.show,
      .header-2-2 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-2-2 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-2-2 .btn:focus,
      .header-2-2 .btn:active {
        outline: none !important;
      }

      .header-2-2 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #27c499;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .btn-fill:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #1d1e3c;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-2-2 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-2-2 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-2-2 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #27c499;
      }

      .header-2-2 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-2-2 .right-column {
        width: 100%;
      }

      .header-2-2 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #272e35;
      }

      .header-2-2 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-try:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-2-2 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #555b61;
        color: #555b61;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover {
        border: 1px solid #27c499;
        color: #27c499;
        transition: 0.3s;
      }

      .header-2-2 .btn-outline:hover div path {
        fill: #27c499;
        transition: 0.3s;
      }

      @media (min-width: 576px) {
        .header-2-2 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-2-2 .navbar {
          padding: 3rem 2rem;
        }

        .header-2-2 .hero {
          padding: 3rem 2rem 5rem;
        }

        .header-2-2 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-2-2 .navbar {
          padding: 3rem 4rem;
        }

        .header-2-2 .hero {
          padding: 3rem 4rem 5rem;
        }

        .header-2-2 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-2-2 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-2-2 .navbar {
          padding: 3rem 6rem;
        }

        .header-2-2 .hero {
          padding: 3rem 6rem 5rem;
        }

        .header-2-2 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-2-2 .right-column {
          width: 50%;
        }

        .header-2-2 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }
      }
    </style>
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                    alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">jadwal</a>
                  </li>
                  </li>
                </ul>
              </div>
              @auth
          <div class="modal-footer border-0 gap-3 nav-item dropdown no-arrow" style="padding:	2rem; padding-top: 0.75rem">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color:black; text-transform: uppercase;">
                {{Auth::user()->name}} - {{Auth::user()->npm}}

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">

                    <li>
                        <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                        </form>
                    </li>

                </ul>

            </a>
          </div>
          @else
          <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
            <a class="btn btn-default btn-no-fill" href="{{route('login')}}">Log In</a>
          </div>
          @endauth
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jadwal">Jadwal</a>
            </li>
          </ul>
          @auth
          <div class="modal-footer border-0 gap-3 nav-item dropdown no-arrow" style="padding:	2rem; padding-top: 0.75rem">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none; color:black; text-transform: uppercase;">
                {{Auth::user()->name}} - {{Auth::user()->npm}}

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">

                    <li>
                        <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                        <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                        </form>
                    </li>

                </ul>

            </a>
          </div>
          @else
          <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
            <a class="btn btn-default btn-no-fill" href="{{route('login')}}">Log In</a>
          </div>
          @endauth
        </div>
      </nav>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              Selamat Datang<br class="d-lg-block d-none" />
              Di Website Pendaftaran Kursus
            </h1>

          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="plans-light position-relative">
    <section class="ornament">
      <style scoped>
        body img.ornament-right {
          z-index: 2 !important;
          position: absolute;
          right: 0;
          top: -30px;
        }
      </style>
      <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Ornament-right.png"
        class="ornament-right" />
    </section>
    <style scoped>
      * {
        font-family: 'Inter', sans-serif !important;
      }

      body .plans-light {
        background: #FAFAFD;
        padding-top: 100px;
        padding-bottom: 100px;
        z-index: 1 !important;
        position: relative;
      }

      body .plans-light .headline {
        font-family: 'Red Hat Display', sans-serif;
        font-weight: 700;
        font-size: 60px;
        line-height: 140%;
        text-align: center;
        color: #16171C;
      }

      @media screen and (max-width: 768px) {
        body .plans-light .headline {
          font-size: 40px;
          line-height: 60px !important;
        }
      }

      body .plans-light .adv-explanationss {
        font-weight: 400;
        font-size: 16px;
        line-height: 160%;
        text-align: center;
        color: #ffff;
        margin-top: 32px;
      }

      body .plans-light .offer {
        margin-top: 90px;
      }

      body .plans-light .offer .free {
        padding: 40px 32px;
        width: 297px;
        background: #FFFFFF;
        border-radius: 12px;
        height: 500px;
      }

      body .plans-light .offer .free .text-free {
        font-family: Inter;
        font-weight: 400;
        font-size: 20px;
        line-height: 160%;
        color: #16171C;
      }

      body .plans-light .offer .free .price {
        margin-top: 20px;
        font-weight: 600;
        font-size: 32px;
        line-height: 160%;
        color: #16171C;
      }

      body .plans-light .offer .free .price .normal-text {
        font-weight: 400;
        font-size: 16px;
      }

      body .plans-light .offer .free .the-adv-of-trhi {
        margin-top: 8px;
        font-weight: 400;
        font-size: 14px;
        line-height: 160%;
        text-align: center;
        color: #8D8F98;
      }

      body .plans-light .offer .free .features {
        margin-top: 40px;
      }

      body .plans-light .offer .free .features .detail {
        font-weight: 400;
        font-size: 16px;
        line-height: 160%;
        color: #494C57;
        margin-top: 20px;
      }

      body .plans-light .offer .free .btn-free {
        margin-top: 72px;
        padding: 8px;
        background: #FAFAFD !important;
        border-radius: 60px;
        font-weight: 700;
        font-size: 16px;
        line-height: 160%;
        color: #494C57;
        width: 100%;
      }

      body .plans-light .offer .professional {
        padding: 40px 32px;
        background: -webkit-gradient(linear, left top, left bottom, from(#518CFF), to(#4376DB));
        background: linear-gradient(180deg, #518CFF 0%, #4376DB 100%);
        border-radius: 12px;
        width: 297px;
      }

      body .plans-light .offer .professional .title {
        padding: 4px 12px;
        width: 102px;
        background: #F2FF57;
        border-radius: 4px;
        font-weight: 700;
        font-size: 12px;
        color: #494C57;
        margin-top: -52px !important;
      }

      body .plans-light .offer .professional .text-pro {
        margin-top: 27px;
        font-weight: 400;
        font-size: 20px;
        line-height: 160%;
        color: #FFFFFF;
      }

      body .plans-light .offer .professional .price {
        margin-top: 20px;
        font-weight: 600;
        font-size: 32px;
        line-height: 160%;
        color: #FFFFFF;
      }

      body .plans-light .offer .professional .price .normal-text {
        font-weight: 400;
        font-size: 16px;
      }

      body .plans-light .offer .professional .the-adv-of-trhi {
        margin-top: 8px;
        font-weight: 400;
        font-size: 14px;
        line-height: 160%;
        text-align: center;
        color: #FFFFFF;
      }

      body .plans-light .offer .professional .features {
        margin-top: 40px;
      }

      body .plans-light .offer .professional .features .detail {
        font-weight: 400;
        font-size: 16px;
        line-height: 160%;
        color: #FFFFFF;
        margin-top: 20px;
      }

      body .plans-light .offer .professional .btn-free {
        margin-top: 72px;
        padding: 8px;
        color: #FFFFFF;
        border-radius: 60px;
        font-weight: 700;
        font-size: 16px;
        line-height: 160%;
        background: #00B67A;
        width: 100%;
      }

      body .font-red-hat-display {
        font-family: 'Red Hat Display', sans-serif !important;
      }

      body .cl-light-blue {
        color: #34b3ff;
      }
    </style>
    <div class="container">
      <div class="row d-block mx-0">
        <div id="jadwal"  class="headline">
          JADWAL
        </div>
      </div>
      <div class="row d-block mx-0">
        <div class="adv-explanationss">
          Choose plan that suits your budget. Every plan has their own <br class="d-none d-md-block"> benefits
          so careful on your
          decision,
          its starts from here!
        </div>
      </div>
      <div class="row mx-0 text-center d-flex justify-content-center offer">
        <div class="professional mb-5 mb-md-0">
          <div class="text-pro">
            Professional
          </div>
          <div class="price">
            $49<span class="normal-text">/month</span>
          </div>
          <div class="the-adv-of-trhi">
            Jadwal Sesi :
          </div>
          <div class="row mx-0 features text-start">
            <div class="col-12 px-0 detail">
              Personal account
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>
