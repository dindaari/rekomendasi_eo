<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event Organizer - Rekomendasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.blade.php">Gp<span>.</span></a></h1> -->
      <a href="index.blade.php" class="logo me-auto me-lg-0"><img src="{{asset('assets/img/logo-digi.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#perusahaan">Perusahaan</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/admin" class="get-started-btn scrollto">SPK</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>DiGi <span>.</span></h1>
          <h2>Event Organizer - Rekomendasi</h2>
        </div>
      </div><br><br><br>

      <div class="container"> 
        <div class="search"> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="search-1"> 
                <i class='bx bx-search-alt'></i> 
                  <input type="text" placeholder="Perusahaan"> 
                </div> 
              </div> 
            <div class="col-md-6"> <div> 
              <div class="search-2"> 
                <i class='bx bxs-map' >
                </i> <input type="text" placeholder="Lokasi"> 
                <button>Search</button> 
              </div> 
            </div> 
          </div> 
        </div> 
      </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" s alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Event Organizer</h3>
            <p>
            Event Organizer atau EO adalah penyelenggara acara yang berhubungan dengan acara. 
            Mulai dari persiapan sampai pelaporan tanggung jawab.
            </p>
            <p>
            Umumnya event organizer dipekerjakan oleh perusahaan manajemen acara dan bekerja dengan berbagai klien di sektor publik, swasta, dan nirlaba. Seorang event organizer berkomunikasi dengan klien untuk mengetahui kebutuhan spesifik mereka dan memberikan acara terbaik, termasuk karir, pendidikan, teknologi, dan pameran dagang termasuk juga di festival film, musik, seni, dan budaya dan pameran.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

        <!-- Filter -->
        <section id="perusahaan" class="peusahaan">
          <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Event Organizer</h2>
            <p>Perusahaan</p>
          </div>

          <div class="container">
            <div class="row">
              <!-- BEGIN SEARCH RESULT -->
              <div class="col-md-12">
                <div class="grid search">
                  <div class="grid-body">
                    <div class="row">
                      <!-- BEGIN FILTERS -->
                      <div class="col-md-3">
                        <h2 class="grid-title"><i class="bi bi-filter"></i> Filters</h2>
                        <hr>
                        
                        <!-- BEGIN FILTER BY CATEGORY -->
                        <h4>By Location:</h4>
                        <div class="checkbox">
                          <label><input type="checkbox" class="icheck"> Jawa Tengah</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" class="icheck"> Jawa Barat</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" class="icheck"> Jawa Timur</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" class="icheck"> Yogyakarta</label>
                        </div>
                        <br>
                        <!-- END FILTER BY CATEGORY -->
                        
                        <!-- <div class="padding"></div> -->
                        
                        <!-- BEGIN FILTER BY DATE -->
                        <!-- <h4>By Date:</h4>
                        From
                        <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                          <input type="text" class="form-control">
                          <span class="input-group-addon bg-blue"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                        </div>
                        <input type="hidden" id="dtp_input1" value="">
                        To
                        <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">
                          <input type="text" class="form-control">
                          <span class="input-group-addon bg-blue"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                        </div>
                        <input type="hidden" id="dtp_input2" value=""> -->
                        <br>
                        <!-- END FILTER BY DATE -->
                        
                        <!-- <div class="padding"></div> -->
                        
                        <!-- BEGIN FILTER BY PRICE -->
                        <!-- <h4>By Price:</h4>
                        Between <div id="price1">Rp.500000</div> to <div id="price2">Rp.50000000</div>
                        <div class="slider-primary">
                          <div class="slider slider-horizontal" style="width: 152px;">
                          <div class="slider-track">
                            <div class="slider-selection" style="left: 30%; width: 50%;"></div>
                            <div class="slider-handle round" style="left: 30%;"></div>
                            <div class="slider-handle round" style="left: 80%;"></div>
                          </div>
                          <div class="tooltip top hide" style="top: -30px; left: 50.1px;">
                          <div class="tooltip-arrow"></div><div class="tooltip-inner">500000 : 50000000</div>
                        </div>
                        <input type="text" class="slider" value="" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="[5000000,50000000]" data-slider-tooltip="hide"></div>
                        </div> -->
                        <!-- END FILTER BY PRICE -->
                      </div>
                      <!-- END FILTERS -->
                      
                      <!-- BEGIN RESULT -->
                      <div class="col-md-9">
                        <h2><i class="bi bi-file-earmark"></i> Result</h2>
                        <hr>
                        <!-- BEGIN SEARCH INPUT -->
                        <div class="input-group" expr:action='data:blog.homepageUrl + "search"' role='search'>
                          <input type="text" class="form-control" value="">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                          </span>
                        </div>
                        <!-- END SEARCH INPUT -->
                        <p>Showing all results matching ...</p>
                        
                        <div class="padding"></div>
            
                          <div class="row">
                            <!-- BEGIN ORDER RESULT -->
                            <!-- <div class="col-sm-6">
                              <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  Order by <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Nama</a></li>
                                  <li><a href="#">Rating</a></li>
                                </ul>
                              </div>
                            </div> -->
                            <!-- END ORDER RESULT -->
                          
                          <!-- <div class="col-md-6 text-right">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default active"><i class="bi bi-list"></i></button>
                              <button type="button" class="btn btn-default"><i class="bi bi-grid-3x3-gap-fill"></i></button>
                            </div>
                          </div> -->
                        </div>

                        <!-- <div class="col-md-10 text-right">
                        <div class="btn-group">
                        <a href="#" class="button button2"><i class="bi bi-plus"></i></a>
                        </div>
                        </div>   -->
                        
                        <!-- BEGIN TABLE RESULT -->
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <tbody><tr>
                              <td class="number text-center">1</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/86-logo.png')}}" alt=""></td>
                              <td class="product"><strong>86 Production</strong><br>Terletak di Surabaya Jawa Timur</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">2</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/kiwari-logo.png')}}" alt=""></td>
                              <td class="product"><strong>Kiwari Production</strong><br>Terletak di Kabupaten Majalengka Jawa Barat</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">3</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/karsa-logo.png')}}" alt=""></td>
                              <td class="product"><strong>KARSA PRODUCTION</strong><br>Terletak di Depok Jawa Barat</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">4</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/bm-logo.png')}}" alt=""></td>
                              <td class="product"><strong>PT. Broadcast Media Group</strong><br>Terletak di Surabaya Jawa Timur.</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">5</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/vp-logo.png')}}" alt=""></td>
                              <td class="product"><strong>Visihati Post, Cv.</strong><br>Terletak di Sukabumi Jawa Barat.</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">6</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/karsa-logo.png')}}" alt=""></td>
                              <td class="product"><strong>Karsa Production</strong><br>Terletak di Sukabumi Jawa Barat.</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">7</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/hope-logo.png')}}" alt=""></td>
                              <td class="product"><strong>Hope Organizer</strong><br>Terletak di Kabupaten Semarang Jawa Tengah.</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                            </tr>
                            <tr>
                              <td class="number text-center">8</td>
                              <td class="image"><img src="{{asset('assets/img/perusahaan/gading-logo.png')}}" alt=""></td>
                              <td class="product"><strong>PT GADING INDAH KARYA MARGA</strong><br>Terletak di Kabupaten Bekasi Jawa Barat.</td>
                              <td class="rate text-right"><span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span></td>
                              <td class="details text-right"><a href="/details" class="details-btn scrollto">Details</a></td>
                              <td class="price text-right">     </td>
                            </tr>
                          </tbody></table>
                        </div>
                        <!-- END TABLE RESULT -->
                        
                        <!-- BEGIN PAGINATION -->
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">1</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>

                        <!-- <ul class="pagination">
                          <li class="disabled"><a href="#">«</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">»</a></li>
                        </ul> -->
                        <!-- END PAGINATION -->
                      </div>
                      <!-- END RESULT -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- END SEARCH RESULT -->
            </div>
            </div>

      </div>
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Kirim Pesan</p>
        </div>

        <!-- <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

          <div class="col-lg-12">

            <form action="{{url('/home/store')}}" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>DiGi<span>.</span></h3>
              <p>
                <strong>Phone:</strong> 089619558721<br>
                <strong>Email:</strong> digi@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dindari</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>