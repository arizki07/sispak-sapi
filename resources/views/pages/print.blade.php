<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Diagnosa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            /* Atur tata letak cetak di sini */
        }

        .page-header {
            margin-bottom: 30px;
        }

        .page-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        table {
            border: 1px solid #dee2e6;
            /* Tambahkan garis ke seluruh tabel */
        }

        th,
        td {
            border: 1px solid #dee2e6;
            /* Tambahkan garis ke setiap sel header dan data */
        }

        .page-footer {
            display: block;
            visibility: visible;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="page-header">
            <div class="row">
                <div class="col">
                    <h1>Daftar Diagnosa</h1>
                </div>
            </div>
        </header>

        <main>
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
                    @foreach ($diagnoses as $key => $diagnosis)
                        <tr class="text-center">
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $diagnosis->penyakit->nama_penyakit }}</td>
                            <td>{{ $diagnosis->cf }}</td>
                            <td>{{ $diagnosis->presentase }}%</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>

        <footer class="page-footer">
            <div class="row">
                <div class="col">
                    &copy; {{ date('Y') }} Sistem Pakar Diagnosis Penyakit Sapi
                </div>
            </div>
        </footer>
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
