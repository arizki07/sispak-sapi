<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Dompdf\Dompdf;
use Dompdf\Options;

class DiagnosaPdfExport extends Model
{
    use HasFactory;
    public function view(): View
    {
        $data = DiagnosaModel::all();
        return view('pages.exportsDiagnosa', [
            'data' => $data
        ]);
    }
}
