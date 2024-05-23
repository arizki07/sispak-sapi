<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Diagnosa</title>
    <style>
        .header,.td-atas{text-align:center}.data-table,.table-bawah,table{border-collapse:collapse}.data-label,.td-bawah,.tebal{font-weight:700}body{font-family:Arial,sans-serif}table{width:100%}table td,table th{padding:8px;border:1px solid #000}table th{background-color:#edfff0}.rangkasurat{margin:0 auto;background-color:#fff;padding:20px}.logo{width:100px}.header{margin-top:15px}.header h1,.header h2{margin:0;padding:0}.additional-info,.header-content{text-align:center;margin-bottom:20px}.table-container{margin-top:20px}.table-bawah{border:0;font-size:12pt;width:100%;margin:auto}.border-solid,.td-bawah{border:1px solid #000}.table-bawah td{border:0;padding:8px;text-align:left}.td-bawah-second,.td-bawah-third{border:1px solid #000;padding:8px}.td-bawah{padding:8px}.td-atas{margin-right:50px}.garis{border:2px solid #000}.kontak{font-size:10px}.nomor-halaman,.nomor-surat,.tgl{font-size:12px}.nomor-surat{float:left}.tgl{float:right}.nomor-halaman{text-align:right;position:absolute;bottom:20px;right:20px}.keterangan-kiri{position:absolute;bottom:20px;left:20px;font-size:12px}.data-table{width:50%;margin:20px auto;text-align:center}.data-label,.data-value,.data-value-1{text-align:left}.data-table td{padding:8px;border:1px solid #ddd}.data-value-right{text-align:right}.data-value-center{text-align:center}.signatures-container{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}.additional-info label{display:block}.underline{text-decoration:underline}
    </style>
</head>

<body>
    <?php
        // Set zona waktu sesuai dengan waktu yang diinginkan
    date_default_timezone_set('Asia/Jakarta');
    ?>
    {{-- <h1 align="center">Laporan Data Diagnosa</h1> --}}
    <div class="rangkasurat">
        <div class="header">
            <table width="100%">
                <tr>
                    <td class="td-atas" style="border-top: 0; border-right: 0; border-bottom: 0; border-left: 0;">
                        <div class="tebal" style="font-size: 22px;">LAPORAN DATA DIAGNOSIS PENYAKIT PADA</div>
                        <div class="tebal" style="font-size: 22px;">HEWAN SAPI TERNAK</div>
                        <div class="tebal">
                            <font style="font-size: 14px;">Hasil perhitungan dilakukan secara otomatis oleh sistem</font>
                        </div>
                        <!-- <div class="kontak">
                            E-mail: <font style="color: blue;">smp-2smbr@gmail.com</font> Telp: (021) 2176263 Website: <font style="color: blue;">smpn-2-smbr.sch.id</font>
                        </div> -->
                    </td>
                </tr>
            </table>
            <hr class="garis">
        </div>
        <h5>Tanggal Cetak Laporan : <?= date('d-m-Y H:i:s') ?> WIB</h5>
        <table>
            <thead>
                <tr>
                    <th colspan="9">Gejala Yang Dipilih</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                    <th>Kode Penyakit</th>
                    <th>Nama Penyakit</th>
                    <th>Tingkat Kepercayaan</th>
                    <th>CF User</th>
                    <th>CF Pakar</th>
                    <th>CF Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($laporanGejala as $key => $row): ?>
                    <tr>
                        <td style="text-align: center"><?= $key + 1 ?></td>
                        <td style="text-align: center"><?= $row['kode_gejala'] ?></td>
                        <td><?= $row['nama_gejala'] ?></td>
                        <td style="text-align: center"><?= $row['kode_penyakit'] ?></td>
                        <td><?= $row['nama_penyakit'] ?></td>
                        <td style="text-align: center"><?= $row['nama_nilai'] ?></td>
                        <td style="text-align: center"><?= $row['cf'] ?></td>
                        <td style="text-align: center"><?= $row['cf_pakar'] ?></td>
                        <td style="text-align: center"><?= $row['cf_hasil'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <br><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Penyakit Yang Dialami</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($laporanDiagnosa as $key => $row): ?>
                    <tr>
                        <th>Kode Penyakit</th>
                        <td style="text-align: center"><?= $row['kode_penyakit'] ?></td>
                    </tr>
                    <tr>
                        <th>Nama Penyakit</th>
                        <td style="text-align: center"><?= $row['nama_penyakit'] ?></td>
                    </tr>
                    <tr>
                        <th>Nilai Akhir</th>
                        <td style="text-align: center"><?= $row['cf'] ?></td>
                    </tr>
                    <tr>
                        <th>Presentase</th>
                        <td style="text-align: center"><?= $row['presentase'] ?> %</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <div>
        <table>
            <thead>
                <?php foreach ($laporanDiagnosa as $key => $row): ?>
                    <tr>
                        <th colspan="2">Solusi Penanganan <?= $row['nama_penyakit'] ?></th>
                    </tr>
                </thead>
            <?php endforeach; ?>
            <tbody>
                <?php foreach ($laporanDiagnosa as $key => $row): ?>
                <tr>
                    <th>Deskripsi Penyakit</th>
                    <td style="text-align: center"><?= $row['deskripsi'] ?></td>
                </tr>
                    <tr>
                        <th>Solusi Penyakit</th>
                        <td style="text-align: center"><?= $row['solusi_penyakit'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- <br><br>
    <div align="left" style="position: absolute; bottom: 0; left: 0;">
        <footer style="font-size: 10px; color: red;">
            Sispasi-Umc | Meskipun sistem pakar ini membantu dalam proses diagnosa depresi, penting untuk diingat bahwa perhitungannya tidak dapat dijadikan sebagai acuan mutlak. Untuk mendapatkan data yang lebih pasti, disarankan untuk berkonsultasi dengan seorang psikolog.
        </footer>
    </div> -->
    </div>
</body>

</html>