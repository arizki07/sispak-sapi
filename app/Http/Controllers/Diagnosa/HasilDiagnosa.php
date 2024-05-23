<?php

namespace App\Http\Controllers\Diagnosa;

use App\Http\Controllers\Controller;
use App\Models\DiagnosaModel;
use App\Models\DiagnosaGejalaModel;
use App\Models\PenyakitModel;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class HasilDiagnosa extends Controller
{
    public function downloadPDF(Request $request)
    {
        // Menggunakan query builder untuk mendapatkan data
        $lastDiagnosa = DiagnosaModel::orderBy('id_diagnosa', 'DESC')->first();
        $pasienId = $lastDiagnosa->id_diagnosa;

        $laporanDiagnosa = DiagnosaModel::select('diagnosa.*', 'penyakit.kode_penyakit', 'penyakit.nama_penyakit', 'penyakit.deskripsi', 'penyakit.solusi_penyakit')
            ->join('penyakit', 'penyakit.id_penyakit', '=', 'diagnosa.id_penyakit', 'left')
            ->where('diagnosa.id_diagnosa', $pasienId)
            ->get();

        $laporanGejala = DiagnosaGejalaModel::select('diagnosa_gejala.*', 'gejala.kode_gejala', 'gejala.nama_gejala', 'cf_user.nama_nilai', 'cf_user.cf', 'penyakit.kode_penyakit', 'penyakit.nama_penyakit')
            ->join('gejala', 'gejala.id_gejala', '=', 'diagnosa_gejala.id_gejala', 'left')
            ->join('penyakit', 'penyakit.id_penyakit', '=', 'diagnosa_gejala.id_penyakit', 'left')
            ->join('cf_user', 'cf_user.id', '=', 'diagnosa_gejala.id_cf_user', 'left')
            ->join('diagnosa', 'diagnosa.id_diagnosa', '=', 'diagnosa_gejala.id_diagnosa', 'left')
            ->where('diagnosa.id_diagnosa', $pasienId)
            ->get();

        $view = view('pages/diagnosa/cetak_diagnosa', ['laporanDiagnosa' => $laporanDiagnosa, 'laporanGejala' => $laporanGejala]);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $pdfContent = $dompdf->output();
        $filename = 'Hasil-Diagnosis_' . date('d-M-Y H:i:s') . '.pdf';

        $response = response($pdfContent);
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }
}
