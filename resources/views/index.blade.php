@extends('master')
@section('content')
<main id="main">

    <!-- ======= About Section aaaaaaaaaaaaaaaaaaaaaaa ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('index.info') }}</h2>
{{--           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="profile_cv\assets\img\h1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer.</h3>
            <p class="font-italic">
   {{--            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. --}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('index.birth') }}:</strong>21/05/1998</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.profile-minh-truyen.heroku-app.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('index.phone') }}:</strong> 0969336672</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('index.city') }}:</strong> {{ trans('index.hcm') }}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('index.age') }}:</strong> 22</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('index.level') }}:</strong> {{ trans('index.university') }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> minhtruyen.ut@gmail.com{{-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640109050d0824011c05091408014a070b09">[email&#160;protected]</a> --}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
{{--             <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
{{--     <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> --}}<!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('index.skills') }}</h2>
{{--           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JQuery <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <div class="progress">
              <span class="skill">Mysql <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Framework Laravel <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Node-JS <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Java <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('index.resume') }}</h2>
  {{--         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">{{ trans('index.sumary') }}</h3>
            <div class="resume-item pb-0">
              <h4>{{ trans('index.name') }}</h4>
              <p><em>{{ trans('index.yourself') }}</em></p>
              <ul>
                <li>{{ trans('index.hcm') }}</li>
                <li>0969336672</li>
                <li>minhtruyen.ut@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">{{ trans('index.education') }}</h3>
            <div class="resume-item">
              <h4>{{ trans('index.school') }}</h4>
              <h5>2016 - 2020</h5>
              <p><em></em></p>
              <p>GPA: 7.31</p>
            </div>
{{--             <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div> --}}
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">{{ trans('index.ProfessionalExperience') }}</h3>
            <div class="resume-item">
              <h4>{{ trans('index.laravel-learn') }}</h4>
              <h5>2019 - {{ trans('index.Present') }}</h5>
              <p><em>Q12-{{ trans('index.hcm') }}</em></p>
              <ul>
                <li>{{ trans('index.laravel-learn1') }}</li>
                <li>{{ trans('index.laravel-learn2') }}</li>
                <li>{{ trans('index.laravel-learn3') }}</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>{{ trans('index.internship') }}</h4>
              <h5>2019</h5>
              <p><em>Q12-{{ trans('index.hcm') }}</em></p>
              <ul>
                <li>{{ trans('index.internship-content') }}</li>
                <li>{{ trans('index.internship-learn') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('index.product') }}</h2>
        </div>

        <div class="row" data-aos="fade-up">
           <h4>{{ trans('index.product') }}</h4>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
{{--               <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
        
         <div class="row" data-aos="fade-up">
           <h4>{{ trans('index.product') }}</h4>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
{{--               <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="profile_cv\assets\img\portfolio\portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="profile_cv\assets\img\portfolio\portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
   {{--  <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section> --}}<!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('index.contact') }}</h2>
  {{--         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{ trans('index.address') }}:</h4>
                <p>86 Đường số 6, Phường Tăng Nhơn Phú B, Quận 9, HCM</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="157c7b737a55706d74786579703b767a78">[email&#160;protected]</a> --}}minhtruyen.ut@gmail.com</p>
              </div>

              <div class="phone">
                <a href="tel:0969336672"><i class="icofont-phone"></i></a>
                <h4>{{ trans('index.phone') }}:</h4>
                <p>0969336672</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6948693066593!2d106.77757101533443!3d10.834646661077738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270489184bf7%3A0x6c5904b050a1b9e!2zODYgU-G7kSA2LCBUxINuZyBOaMahbiBQaMO6IEIsIFF14bqtbiA5LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1594482175834!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;width: 100%; height: 290px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="get" action="{{ route('mail') }}"  class="php-email-form">
              <div class="form-group col-md-6">
                <input class="form-control" type="text" name="name" placeholder="{{ trans('index.yourname') }}" required>
              </div>
              <div class="form-group col-md-6"> 
                <input class="form-control" type="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="{{ trans('index.message') }}" required></textarea>
              </div>
              <div>
                <input type="submit" name="submit" placeholder="{{ trans('index.sendmessage') }}" required>
              </div>
            </form>
{{--             <form action="{{ route('mail') }}" method="get" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">{{ trans('index.yourname') }}</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Nhập ít nhất 4 ký tự">
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Nhập email chưa đúng">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">{{ trans('index.message') }}</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Làm ơn viết một cái gì đó gửi đến tôi"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Đang gửi</div>
                <div class="error-message"></div>
                <div class="sent-message">Bạn đã gửi tin nhắn thành công cho tôi</div>
              </div>
              <div class="text-center"><button type="submit">{{ trans('index.sendmessage') }}</button></div>
            </form> --}}
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>
  @endsection
