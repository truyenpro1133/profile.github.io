 <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="text-light">{{ trans('index.lang') }}
         <a href="{{ route('lang',['lang' => 'vi']) }}"><img width="30" src="profile_cv\assets\img\vietnam.png"></a>
          <a href="{{ route('lang',['lang' => 'en' ]) }}"><img width="30" src="profile_cv\assets\img\english.png"></a></div>
      <div class="profile">

        <img src="profile_cv\assets\img\h2.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">{{ trans('index.name') }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/dangminhtruyen.truyen" class="facebook" target="_blank" ><i class="bx bxl-facebook"></i></a>
          <a href="https://join.skype.com/invite/cbIeUAJVOfaL" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>

          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>{{ trans('index.home') }}</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>{{ trans('index.info') }}</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>{{ trans('index.resume') }}</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i>{{ trans('index.product') }}</a></li>
          {{-- <li><a href="#services"><i class="bx bx-server"></i> Services</a></li> --}}
          <li><a href="#contact"><i class="bx bx-envelope"></i>{{ trans('index.contact') }}</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ trans('index.name') }}</h1>
      <p>{{ trans('index.iam') }} <span class="typed" data-typed-items="Developer, Freelancer"></span></p>
    </div>
  </section><!-- End Hero -->