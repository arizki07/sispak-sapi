@extends('layouts.landing.main')
@section('contentL')
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
                            <h1 data-aos="fade-up" data-aos-delay="">Mulai Diagnosa</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Sistem pakar diagnosis penyakit pada
                                sapi dengan metode <i>Forward Chaining dan Certainty Factor</i>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="section">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-7 mb-5">
                    <h2 class="section-heading">Pilih Gejala</h2>
                    <p>Silahkan pilih gejala yang dialami oleh Sapi milik anda.</p>
                    <p><strong>Tidak semua gejala harus dipilih</strong>. gejala wajib dipilih minimal 1 beserta dengan
                        nilai kepercayaan yang anda percayai.</p>

                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="card-body table-responsive p-0">
                    <form action="{{ route('diagnosa.start') }}" method="post" id="diagnoseForm">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-header">
                                <h5 class="card-title text-black">Form Gejala</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Pilih Gejala</th>
                                                <th>Kode Gejala</th>
                                                <th>Nama Gejala</th>
                                                <th>Tingkat Kepercayaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($gejala as $item) : ?>
                                            <tr class="text-center">
                                                <td class="align-middle" style="vertical-align: middle;">
                                                    <!-- Menyamakan checkbox dengan judul -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="selectedGejala[]" value="<?= $item['id_gejala'] ?>"
                                                            id="check<?= $item['id_gejala'] ?>" onchange="">
                                                    </div>
                                                </td>
                                                <td><?= $item['kode_gejala'] ?></td>
                                                <td><?= $item['nama_gejala'] ?></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select class="form-select" name="cf[]" required>
                                                            <option selected disabled>--Pilih Nilai--</option>
                                                            <?php foreach ($listCFUser as $item) : ?>
                                                            <option value="<?= $item['id'] ?>">
                                                                <?= $item['nama_nilai'] ?>
                                                            </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="history.back('/')">Kembali</button>
                                    <button id="diagnoseButton" type="button"
                                        class="btn btn-primary mr-2 mx-2">Diagnosa</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                    <h2>Starts Publishing Your Apps</h2>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App
                                store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i
                                class="bx bxl-play-store"></i><span>Google
                                play</span></a></p>
                </div>
            </div>
        </div>
    </section><!-- End CTA Section -->

    <link href="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.js') }}" defer></script>
    <script>
        document.getElementById('diagnoseButton').addEventListener('click', function() {
            Swal.fire({
                icon: 'info',
                title: 'Diagnosa',
                html: `
                    <center>
                        <lottie-player src="https://lottie.host/933bb0e2-47c0-4fa6-83f9-3330b433b883/yymyeZt49h.json"  
                            background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay>
                        </lottie-player>
                    </center>
                    <br>
                    <h3 class="h4">Sedang memproses data. Proses mungkin membutuhkan beberapa menit.</h3>
                    <h3 class="h4">
                        <b class="text-danger">(Jangan menutup jendela ini, bisa mengakibatkan error)</b>
                    </h3>
                `,
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: false
            });

            // Simulasikan proses diagnosa
            setTimeout(function() {
                // Submit form
                document.getElementById('diagnoseForm').submit();
            }, 3000); // Penundaan simulasi dalam milidetik (di sini: 3 detik)
        });
    </script>
@endsection
