<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Laporan Data Diagnosa</title>
        <style>
            .header,
            .td-atas {
                text-align: center
            }

            .data-table,
            .table-bawah,
            table {
                border-collapse: collapse
            }

            .data-label,
            .td-bawah,
            .tebal {
                font-weight: 700
            }

            body {
                font-family: Arial, sans-serif
            }

            table {
                width: 100%
            }

            table td,
            table th {
                padding: 8px;
                border: 1px solid #000
            }

            table th {
                background-color: #edfff0
            }

            .rangkasurat {
                margin: 0 auto;
                background-color: #fff;
                padding: 20px
            }

            .logo {
                width: 100px
            }

            .header {
                margin-top: 15px
            }

            .header h1,
            .header h2 {
                margin: 0;
                padding: 0
            }

            .additional-info,
            .header-content {
                text-align: center;
                margin-bottom: 20px
            }

            .table-container {
                margin-top: 20px
            }

            .table-bawah {
                border: 0;
                font-size: 12pt;
                width: 100%;
                margin: auto
            }

            .border-solid,
            .td-bawah {
                border: 1px solid #000
            }

            .table-bawah td {
                border: 0;
                padding: 8px;
                text-align: left
            }

            .td-bawah-second,
            .td-bawah-third {
                border: 1px solid #000;
                padding: 8px
            }

            .td-bawah {
                padding: 8px
            }

            .td-atas {
                margin-right: 50px
            }

            .garis {
                border: 2px solid #000
            }

            .kontak {
                font-size: 10px
            }

            .nomor-halaman,
            .nomor-surat,
            .tgl {
                font-size: 12px
            }

            .nomor-surat {
                float: left
            }

            .tgl {
                float: right
            }

            .nomor-halaman {
                text-align: right;
                position: absolute;
                bottom: 20px;
                right: 20px
            }

            .keterangan-kiri {
                position: absolute;
                bottom: 20px;
                left: 20px;
                font-size: 12px
            }

            .data-table {
                width: 50%;
                margin: 20px auto;
                text-align: center
            }

            .data-label,
            .data-value,
            .data-value-1 {
                text-align: left
            }

            .data-table td {
                padding: 8px;
                border: 1px solid #ddd
            }

            .data-value-right {
                text-align: right
            }

            .data-value-center {
                text-align: center
            }

            .signatures-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px
            }

            .additional-info label {
                display: block
            }

            .underline {
                text-decoration: underline
            }
        </style>
    </head>
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
                            <font style="font-size: 14px;">Hasil perhitungan dilakukan secara otomatis oleh sistem
                            </font>
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
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nama Penyakit</th>
                    <th scope="col">CF</th>
                    <th scope="col">Presentase</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $diagnosis)
                    <tr class="text-center">
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $diagnosis->penyakit->nama_penyakit }}</td>
                        <td>{{ $diagnosis->cf }}</td>
                        <td>{{ $diagnosis->presentase }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script>
        window.onbeforeprint = function() {
            // Sematkan kode JavaScript di sini untuk menyesuaikan tampilan sebelum mencetak
            document.getElementById('elementId').style.display =
                'none'; // Contoh: menyembunyikan elemen sebelum mencetak
            document.getElementById('header').style.display = 'none'; // Contoh: menyembunyikan header sebelum mencetak
        };

        window.onafterprint = function() {
            // Sematkan kode JavaScript di sini untuk menyesuaikan tampilan setelah mencetak
            document.getElementById('elementId').style.display =
                'block'; // Contoh: menampilkan kembali elemen setelah mencetak
            document.getElementById('header').style.display =
                'block'; // Contoh: menampilkan kembali header setelah mencetak
        };

        window.onload = function() {
            // Sematkan kode JavaScript di sini untuk tindakan lain saat halaman dimuat
            // Misalnya, inisialisasi atau pengaturan tambahan
        };
    </script>

</body>

</html>
