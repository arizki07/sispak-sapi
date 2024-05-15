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
                            <h1 data-aos="fade-up" data-aos-delay="">Our Pricing</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.</p>
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
                    <h2 class="section-heading">HASIL DIAGNOSIS</h2>
                    <p>Hasil diagnosis ini berdasarkan perhitungan sistem menggunakan metode
                        certainty factor.</p>
                    <a href="{{ route('downloadpdf') }}" class="btn btn-primary">Download Data</a>

                </div>
            </div>
            <div class="col-12 text-center">
                <h2 class="mb-4">Hasil Perhitungan</h1>
            </div>
            <div class="row align-items-stretch">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="design-tab" data-bs-toggle="tab"
                                                data-bs-target="#design-tab-pane" type="button" role="tab"
                                                aria-controls="design-tab-pane" aria-selected="true">Penyakit</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                                data-bs-target="#education-tab-pane" type="button" role="tab"
                                                aria-controls="education-tab-pane" aria-selected="false">Solusi
                                                Penanganan</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="marketing-tab" data-bs-toggle="tab"
                                                data-bs-target="#marketing-tab-pane" type="button" role="tab"
                                                aria-controls="marketing-tab-pane" aria-selected="false">Daftar Penyakit
                                                Lain</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                                data-bs-target="#finance-tab-pane" type="button" role="tab"
                                                aria-controls="finance-tab-pane" aria-selected="false">Detail
                                                Perhitungan</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row align-items-stretch">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                                    aria-labelledby="design-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">Penyakit Dialami</h5>

                                                                            <p class="mb-0">Berdasarkan perhitungan
                                                                                terbesar,
                                                                                ayam anda
                                                                                mengalami penyakit</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <h4><?= $resultDiagnosa['nama_penyakit'] ?>
                                                                            (<?= $resultDiagnosa['kode_penyakit'] ?>)</h4>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">Nilai CF</h5>

                                                                            <p class="mb-0">Berdasarkan perhitungan
                                                                                terbesar,
                                                                                nilai CF
                                                                                pada
                                                                                ayam anda sebesar</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <h3><?= $resultDiagnosa['tingkat_kepercayaan'] ?>
                                                                        </h3>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12 text-center">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">Presentase Penyakit</h5>

                                                                            <p class="mb-0">Berdasarkan nilai CF, maka
                                                                                presentase
                                                                                penyakitnya
                                                                                adalah</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-5">
                                                                        <h3><?= $resultDiagnosa['presentase'] ?>%</h3>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel"
                                                    aria-labelledby="marketing-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-3">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <div class="text-center">
                                                                    <div>
                                                                        <h5 class="mb-2">Daftar Penyakit Lain</h5>

                                                                        <p class="mb-0">Daftar penyakit sebagai
                                                                            perbandingan
                                                                            nilai CF
                                                                            akhir
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <?php if (count($listPenyakit) > 1) : ?>
                                                                <br />
                                                                <br />
                                                                <div class="card card-info">
                                                                    <div class="card-header">
                                                                        <div class="card-tools">
                                                                            <form>
                                                                                <?php foreach ($listPenyakit as $penyakit) : ?>
                                                                                <div class="col-lg-12 col-12 m-auto mt-2">
                                                                                    <div class="accordion"
                                                                                        id="accordionExample">
                                                                                        <div class="accordion-item">
                                                                                            <h2 class="accordion-header"
                                                                                                id="headingOne">
                                                                                                <button
                                                                                                    class="accordion-button"
                                                                                                    type="button"
                                                                                                    data-bs-toggle="collapse"
                                                                                                    data-bs-target="#collapseOne"
                                                                                                    aria-expanded="true"
                                                                                                    aria-controls="collapseOne">
                                                                                                    Penyakit
                                                                                                    <?= $penyakit['kode_penyakit'] ?>
                                                                                                </button>
                                                                                            </h2>

                                                                                            <div id="collapseOne"
                                                                                                class="accordion-collapse collapse show"
                                                                                                aria-labelledby="headingOne"
                                                                                                data-bs-parent="#accordionExample">
                                                                                                <div
                                                                                                    class="accordion-body">
                                                                                                    <div class="card-body">
                                                                                                        <div
                                                                                                            class="form-group row py-1">
                                                                                                            <label
                                                                                                                class="col-sm-2 col-form-label text-black">Nama
                                                                                                                Penyakit</label>
                                                                                                            <div
                                                                                                                class="col-sm-10">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    value="<?= $penyakit['nama_penyakit'] ?>"
                                                                                                                    readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="form-group row py-1">
                                                                                                            <label
                                                                                                                class="col-sm-2 col-form-label text-black">Nilai
                                                                                                                CF</label>
                                                                                                            <div
                                                                                                                class="col-sm-10">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    value="<?= $penyakit['nilai_cf'] ?>"
                                                                                                                    readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="form-group row py-1">
                                                                                                            <label
                                                                                                                class="col-sm-2 col-form-label text-black">Deskripsi</label>
                                                                                                            <div
                                                                                                                class="col-sm-10">
                                                                                                                <textarea row="2" type="text" class="form-control" readonly><?= $penyakit['deskripsi'] ?></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="form-group row py-1">
                                                                                                            <label
                                                                                                                class="col-sm-2 col-form-label text-black">Solusi</label>
                                                                                                            <div
                                                                                                                class="col-sm-10">
                                                                                                                <textarea row="2" type="text" class="form-control" readonly><?= $penyakit['solusi'] ?></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <?php endforeach; ?>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel"
                                                    aria-labelledby="finance-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6 col-12 mb-4 mb-lg-0">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="text-center">
                                                                        <div>
                                                                            <h5 class="mb-2">Detail Perhitungan Gejala
                                                                            </h5>

                                                                            <p class="mb-0">Perhitungan ini dilakukan
                                                                                berdasarkan
                                                                                perhitungan
                                                                                gejala yang anda pilih</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body mt-4">
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
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel"
                                                    aria-labelledby="education-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">Deskripsi Penyakit
                                                                                <?= $resultDiagnosa['nama_penyakit'] ?></h5>

                                                                            <p class="mb-0">
                                                                                <?= $resultDiagnosa['deskripsi'] ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="#">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">Solusi Penanganan
                                                                                <?= $resultDiagnosa['nama_penyakit'] ?></h5>

                                                                            <p class="mb-0">
                                                                                <?= $resultDiagnosa['solusi_penyakit'] ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <p><a href="#" class="btn d-inline-flex align-items-center"><i
                                class="bx bxl-apple"></i><span>App
                                store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i
                                class="bx bxl-play-store"></i><span>Google
                                play</span></a></p>
                </div>
            </div>
        </div>
    </section><!-- End CTA Section -->
@endsection
