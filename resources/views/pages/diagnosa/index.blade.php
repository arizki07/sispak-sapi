@extends('layouts.landing.main')
@section('contentL')
    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Sistem Pakar Diagnosis Sapi Ternak</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Sistem pakar diagnosis penyakit
                                pada sapi ternak dengan menggunakan metode <i>Forward Chaining dan Certainty Factor berbasis
                                    web </i>.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="/mulai_diagnosa"
                                    class="btn btn-outline-white">Mulai Diagnosa</a></p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="landing/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
                            <img src="landing/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <style>
        .text-justify {
            text-align: justify;
        }
    </style>

    <section class="section" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 me-auto">
                    <h2 class="mb-4">About Us</h2>
                    <p class="mb-4 text-justify">Sistem pakar adalah sistem komputer yang dirancang untuk menyediakan saran,
                        rekomendasi, atau solusi untuk masalah dalam domain tertentu. Sistem pakar dalam bidang kedokteran
                        hewan dapat membantu dokter hewan dalam mendiagnosis penyakit pada hewan ternak seperti sapi.
                        Kombinasi antara metode forward chaining dan certainty factor memungkinkan sistem pakar untuk
                        menghasilkan diagnosis yang lebih akurat dan terpercaya. Proses forward chaining memungkinkan sistem
                        untuk secara sistematis mengevaluasi gejala-gejala yang ada, sementara certainty factor memungkinkan
                        sistem untuk mengukur dan mengelola tingkat kepercayaan terhadap diagnosis yang dihasilkan.

                        Dengan demikian, sistem pakar diagnosis penyakit pada sapi yang menggunakan metode forward chaining
                        dan certainty factor dapat membantu dokter hewan dalam membuat keputusan yang lebih baik dan
                        memberikan perawatan yang tepat untuk sapi yang sakit.
                    </p>
                    <p><a href="#" class="btn btn-primary">Download Now</a></p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="landing/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom" id="informasi">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-4">
                    <h2 class="section-heading">Metode yang digunakan</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-7">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="review text-center">
                                    <p class="stars">
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill muted"></span>
                                    </p>
                                    <h3>FORWARD CHAINING!</h3>
                                    <blockquote>
                                        <p>Metode forward chaining adalah salah satu teknik yang digunakan dalam sistem
                                            pakar untuk membuat keputusan atau menghasilkan kesimpulan. Proses forward
                                            chaining dimulai dengan menganalisis gejala yang ada, lalu sistem secara
                                            bertahap menelusuri aturan-aturan yang terkait dengan gejala tersebut untuk
                                            mencapai kesimpulan akhir atau diagnosis.</p>
                                    </blockquote>

                                    <p class="review-user">
                                        <img src="assets/static/images.png" alt="Image"
                                            class="img-fluid rounded-circle mb-3">
                                    </p>

                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="review text-center">
                                    <p class="stars">
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill"></span>
                                        <span class="bi bi-star-fill muted"></span>
                                    </p>
                                    <h3>CERTAINTY FACTOR!</h3>
                                    <blockquote>
                                        <p>Certainty factor (CF) adalah nilai yang digunakan dalam sistem pakar untuk
                                            mengevaluasi tingkat kepercayaan terhadap suatu kesimpulan atau diagnosis. CF
                                            dapat berkisar dari -1 (kesimpulan pasti tidak benar) hingga +1 (kesimpulan
                                            pasti benar), dengan 0 menunjukkan ketidakpastian atau ketidakyakinan. Dalam
                                            sistem pakar, CF digunakan untuk menghitung kepercayaan terhadap suatu diagnosis
                                            berdasarkan bobot atau keakuratan dari setiap aturan yang digunakan.</p>
                                    </blockquote>

                                    <p class="review-user">
                                        <img src="assets/static/images.png" alt="Image"
                                            class="img-fluid rounded-circle mb-3">
                                    </p>

                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->


    <section class="section" id="kontak">
        <div class="container">
          <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">
  
              <h2>Kontak</h2>
              <p class="mb-0">.</p>
            </div>
  
          </div>
  
          <div class="row">
            <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <strong class="d-block mb-1">Alamat</strong>
                  <span>Celancang, Kabupaten Cirebon, Jawa Barat</span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">No Telp</strong>
                  <span>+62822 xxxx xxxx</span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">Email</strong>
                  <span>mocrifkisebastian@gmail.com</span>
                </li>
                <li class="mb-3">
                  <strong class="d-block mb-1">Github</strong>
                  <span>@rifkisebastian</span>
                </li>
              </ul>
            </div>
  
            <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
  
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" readonly>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" readonly>
                  </div>
                  <div class="col-md-12 form-group mt-3">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" readonly>
                  </div>
                  <div class="col-md-12 form-group mt-3">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" readonly></textarea>
                  </div>
  
                  <div class="col-md-12 mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
  
                  <div class="col-md-6 form-group">
                    <input type="submit" class="btn btn-primary d-block w-100" value="Send Message" disabled>
                  </div>
                </div>
  
              </form>
            </div>
  
          </div>
        </div>
      </section>
@endsection
