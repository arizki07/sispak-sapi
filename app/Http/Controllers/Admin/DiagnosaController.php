<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiagnosaModel;
use App\Models\PenyakitModel;
use Illuminate\Http\Request;
use App\Exports\DiagnosaPdfExport;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class DiagnosaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exportToPdf()
    {
        // Get data for PDF (assuming you're fetching it from your model)
        $data = DiagnosaModel::all();

        // Load the view with data
        $view = view('pages.exportsDiagnosa', ['data' => $data])->render();

        // Instantiate Dompdf with options
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);

        // Load HTML content
        $dompdf->loadHtml($view);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF (inline or download)
        return $dompdf->stream('diagnosa.pdf');
    }

    public function printDiagnosis()
    {
        $diagnoses = DiagnosaModel::all(); // Ambil semua data diagnosis dari model

        return view('pages.print', compact('diagnoses')); // Sesuaikan dengan nama view Anda
    }

    public function index()
    {
        $penyakit = PenyakitModel::all();
        $diagnosa = DiagnosaModel::all();
        return view('pages.admin.data_diagnosa.index', [
            'diagnosa' => $diagnosa,
            'penyakit' => $penyakit,
            'active' => 'Diagnosa',
            'judul' => 'Data Diagnosa',
        ]);
    }

    public function destroy($id)
    {
        $diagnosa = DiagnosaModel::find($id);

        if (!$diagnosa) {
            return redirect()->route('diagnosa.index')->with('error', 'Data diagnosa tidak ditemukan');
        }

        if ($diagnosa->delete()) {
            return redirect()->route('diagnosa.index')->with('success', 'Data diagnosa berhasil dihapus');
        } else {
            return redirect()->route('diagnosa.index')->with('error', 'Gagal menghapus data diagnosa');
        }
    }
}
