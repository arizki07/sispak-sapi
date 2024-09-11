<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hasil Diagnosis</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="landing/img/favicon.png" rel="icon">
    <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landing/vendor/aos/aos.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="landing/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-mplate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="index.html">SPK SAPI</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="landing/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#hasil">Hasil Diagnosis</a></li>
                <li><a href="#penanganan">Penanganan</a></li>
                <li><a href="#daftar">Daftar Penyakit</a></li>
                <li><a href="#perhitungan">Detail Perhitungan</a></li>
                <li><a href="{{ route('downloadpdf') }}">Download Hasil Diagnosis</a></li>
                {{-- <li><a href="login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-password-user"
                            width="44" height="26" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 17v4" />
                            <path d="M10 20l4 -2" />
                            <path d="M10 18l4 2" />
                            <path d="M5 17v4" />
                            <path d="M3 20l4 -2" />
                            <path d="M3 18l4 2" />
                            <path d="M19 17v4" />
                            <path d="M17 20l4 -2" />
                            <path d="M17 18l4 2" />
                            <path d="M9 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M7 14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2" />
                        </svg>
                        Login</a></li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


<style>
    /* CSS tambahan */
    .table-bordered {
        border: 1px solid #dee2e6;
        /* warna garis */
    }

    .align-middle {
        vertical-align: middle !important;
        /* mengatur posisi vertical */
    }
</style>
<!-- ======= FeatPricingures Section ======= -->
<div class="hero-section inner-page">
    <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                        id="Path"></path>
                </g>
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">HASIL DIAGNOSIS</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Hasil diagnosis ini berdasarkan
                            perhitungan sistem menggunakan metode
                            certainty factor.</p>
                        <a href="{{ route('downloadpdf') }}" class="btn btn-primary" data-aos="fade-up"
                            data-aos-delay="100">Download Hasil Diagnosis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<section class="section" id="hasil">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
                <h2 class="section-heading">Penyakit Yang Dialami Sapi Anda</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                <div class="feature-1 text-center">
                    <div class="wrap-icon icon-1">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h3 class="mb-3">Penyakit {{ $resultDiagnosa['kode_penyakit'] }}</h3>
                    <p>Berdasarkan perhitungan terbesar, sapi anda mengalami penyakit</p>
                    <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['nama_penyakit'] }}</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-1 text-center">
                    <div class="wrap-icon icon-1">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                    <h3 class="mb-3">Nilai Keputusan</h3>
                    <p>Berdasarkan perhitungan terbsesar, Besaran nilai keputusan penyakit pada sapi anda yaitu</p>
                    <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['tingkat_kepercayaan'] }}
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-1 text-center">
                    <div class="wrap-icon icon-1">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <h3 class="mb-3">NIlai Presentase</h3>
                    <p>Berdasarkan nilai keputusan, maka presentase penyakit sebesar</p>
                    <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['presentase'] }} %</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ======= CTA Section ======= -->
<section class="section cta-section" id="penanganan">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                <h2 style="font-size: 35px;">Deskripsi Penyakit {{ $resultDiagnosa['kode_penyakit'] }}</h2>
                <p>{{ $resultDiagnosa['deskripsi'] }}</p>
            </div>
            <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                <h2 style="font-size: 35px;">Solusi Penanganan {{ $resultDiagnosa['kode_penyakit'] }}</h2>
                <p>{{ $resultDiagnosa['solusi_penyakit'] }}</p>
            </div>
        </div>
    </div>
</section><!-- End CTA Section -->

<section class="section border-top border-bottom" id="daftar">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12">
                <h2 class="section-heading">Daftar Penyakit Lain</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                @if (count($listPenyakit) > 1)
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach ($listPenyakit as $penyakit)
                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <h3>{{ $penyakit['nama_penyakit'] }} ({{ $penyakit['kode_penyakit'] }})</h3>
                                        <blockquote>
                                            <h3 style="font-size: 16px;" class="mt-5">Deskripsi Penyakit</h3>
                                            <p>{{ $penyakit['deskripsi'] }}</p>
                                            <h3 style="font-size: 16px;">Solusi Penyakit</h3>
                                            <p>{{ $penyakit['solusi'] }}</p>
                                        </blockquote>

                                        <p class="review-user">
                                            {{-- <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3"> --}}
                                            <span class="d-block">
                                                <span class="text-black">Nilai CF :
                                                    {{ $penyakit['nilai_cf'] }}</span>, &mdash; Presentase :
                                                {{ $penyakit['nilai_cf'] * 100 }} %
                                            </span>
                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="section cta-section" id="perhitungan">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2 style="font-size: 35px;">Detail Perhitungan Yang Sudah Dilakukan</h2>
            <p class="mb-5">Perhitungan ini dilakukan
                berdasarkan
                perhitungan
                gejala yang anda pilih</p>
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Gejala</th>
                                    <th>Gejala Terpilih</th>
                                    <th>Tingkat Kepercayaan</th>
                                    <th>Kode Penyakit</th>
                                    <th>CF Pakar</th>
                                    <th>CF User</th>
                                    <th>CF User * CF Pakar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($resultDiagnosa['gejala'] as $gejala) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $gejala['kode_gejala'] ?></td>
                                    <td><?= $gejala['nama_gejala'] ?></td>
                                    <td><?= $gejala['tingkat_kepercayaan'] ?>
                                    </td>
                                    <td>
                                        <?php foreach ($penyakitCodes as $kode_penyakit) : ?>
                                        <?php if (in_array($kode_penyakit, $gejala['kode_penyakit'])) : ?>
                                        <p><?= $kode_penyakit ?></p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($cf as $item) : ?>
                                        <?php if ($item['id_gejala'] == $gejala['id_gejala']) : ?>
                                        <p><?= $item['cf'] ?></p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?= $gejala['cf_user'] ?></td>
                                    <td>
                                        <?php foreach ($cf as $value) : ?>
                                        <?php if ($value['id_gejala'] == $gejala['id_gejala']) : ?>
                                        <p><?= $value['nilai_cf'] ?></p>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <p class="copyright">&copy; Copyright {{ date('Y') }} <a
                        href="https://www.instagram.com/rifki_sebastian" target="_blank" class="link-secondary">Moch
                        Rifki Sebastian</a>.</p>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">Bootstrap 5</a>
                </div>
            </div>
        </div>

    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="landing/vendor/aos/aos.js"></script>
<script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
<script src="landing/vendor/php-email-form/validate.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- Template Main JS File -->
<script src="landing/js/main.js"></script>

</body>

</html>
