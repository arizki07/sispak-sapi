<?php

namespace App\Http\Controllers\Diagnosa;

use App\Http\Controllers\Controller;
use App\Models\DiagnosaModel;
use App\Models\PenyakitModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class HasilDiagnosa extends Controller
{
    public function downloadPDF(Request $request)
    {
        $diagnosa = DiagnosaModel::all();
        $penyakit = PenyakitModel::all();

        // Buat objek Dompdf dengan opsi default
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        // Render view ke dalam HTML
        $html = view('pages.hasil_diagnosapdf', compact('diagnosa', 'penyakit'))->render();

        // Load HTML ke dalam Dompdf
        $dompdf->loadHtml($html);

        // Setting ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML ke dalam PDF
        $dompdf->render();

        // Simpan atau kirim file PDF ke browser untuk di-download
        return $dompdf->stream('hasil_diagnosa.pdf');
    }
}
