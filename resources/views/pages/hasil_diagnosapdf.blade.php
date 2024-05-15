<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa Penyakit pada Sapi</title>
    <style>
        /* Style CSS Anda bisa ditempatkan di sini */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Sistem Pakar Diagnosis Penyakit pada Sapi</h1>
            <h2>Metode Forward Chaining dan Certainty Factor Berbasis Web</h2>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nama Penyakit</th>
                    <th>Nilai CF</th>
                    <th>Presentase</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diagnosa as $item)
                    <tr>
                        <td>{{ $item->penyakit->nama_penyakit }}</td>
                        <td>{{ $item->cf }}</td>
                        <td>{{ $item->presentase }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Isi Hasil Diagnosa -->
        {{-- <div class="result">
            <!-- Tampilkan data diagnosa di sini -->
            <h3>Hasil Diagnosa:</h3>
            <p>Nama Penyakit: {{ $resultDiagnosa }} ({{ $resultDiagnosa['kode_penyakit'] }})</p>
            <p>Nilai Tingkat Kepercayaan: {{ $resultDiagnosa['tingkat_kepercayaan'] }}</p>
            <p>Presentase Penyakit: {{ $resultDiagnosa['presentase'] }}%</p>
        </div> --}}

        <!-- Daftar Penyakit Lain -->
        {{-- <div class="other-diseases">
            <!-- Tampilkan daftar penyakit lain di sini -->
            <h3>Daftar Penyakit Lain:</h3>
            <ul>
                @foreach ($listPenyakit as $penyakit)
                    <li>
                        <p>Kode Penyakit: {{ $penyakit['kode_penyakit'] }}</p>
                        <p>Nama Penyakit: {{ $penyakit['nama_penyakit'] }}</p>
                        <p>Nilai CF: {{ $penyakit['nilai_cf'] }}</p>
                        <p>Deskripsi: {{ $penyakit['deskripsi'] }}</p>
                        <p>Solusi: {{ $penyakit['solusi'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div> --}}

        <div class="footer">
            <p>{{ date('l, j F Y') }}</p>
        </div>
</body>

</html>
