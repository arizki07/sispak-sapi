<!DOCTYPE html>
<html>

<head>
    <title>Data Diagnosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Data Diagnosa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penyakit</th>
                <th>CF</th>
                <th>Presentase</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->penyakit->nama_penyakit }}</td>
                    <td>{{ $item->cf }}</td>
                    <td>{{ $item->presentase }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
