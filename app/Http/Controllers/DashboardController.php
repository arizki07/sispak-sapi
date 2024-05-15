<?php

namespace App\Http\Controllers;

use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penyakit = PenyakitModel::count();
        $gejala = GejalaModel::count();
        $relasi = RelasiModel::count();
        $diagnosa = DiagnosaModel::count();
        return view('pages.dashboard', [
            'active' => 'Dashboard',
            'judul' => 'Halaman Dashboard',
            'penyakit' => $penyakit,
            'gejala' => $gejala,
            'relasi' => $relasi,
            'diagnosa' => $diagnosa
        ]);
    }
}
