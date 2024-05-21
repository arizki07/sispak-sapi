<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penyakit = PenyakitModel::all();
        return view('pages.admin.data_penyakit.index', [
            'active' => 'Penyakit',
            'judul' => 'Data Penyakit',
            'penyakit' => $penyakit,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'kode_penyakit' => 'required',
            'deskripsi' => 'required',
            'solusi_penyakit' => 'required',
        ]);

        $penyakit = new PenyakitModel;

        if (!$penyakit) {
            return redirect()->route('penyakit.index')->with('error', 'Data penyakit tidak ditemukan');
        }

        $penyakit->nama_penyakit = $request->input('nama_penyakit');
        $penyakit->kode_penyakit = $request->input('kode_penyakit');
        $penyakit->deskripsi = $request->input('deskripsi');
        $penyakit->solusi_penyakit = $request->input('solusi_penyakit');
        $penyakit->save();

        if ($penyakit->save()) {
            return redirect()->route('penyakit.index')->with('success', 'Data penyakit berhasil di tambahkan');
        } else {
            return redirect()->route('penyakit.index')->with('error', 'Gagal update data penyakit. Silahkan coba lagi!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'kode_penyakit' => 'required',
            'deskripsi'     => 'required',
            'solusi_penyakit' => 'required',
        ]);

        $penyakits = PenyakitModel::find($id);

        if (!$penyakits) {
            return redirect()->route('penyakit.index')->with('error', 'Data penyakit tidak ditemukan');
        }

        $penyakits->nama_penyakit = $request->input('nama_penyakit');
        $penyakits->kode_penyakit = $request->input('kode_penyakit');
        $penyakits->deskripsi = $request->input('deskripsi');
        $penyakits->solusi_penyakit = $request->input('solusi_penyakit');
        $penyakits->save();

        if ($penyakits->save()) {
            return redirect()->route('penyakit.index')->with('success', 'Data penyakit berhasil diupdate');
        } else {
            return redirect()->route('penyakit.index')->with('error', 'Gagal mengupdate data penyakit');
        }
    }

    public function destroy($id)
    {
        $penyakits = PenyakitModel::find($id);

        if (!$penyakits) {
            return redirect()->route('penyakit.index')->with('error', 'Data penyakit tidak ditemukan');
        }

        $relasiCount = RelasiModel::where('id_penyakit', $id)->count();

        if($relasiCount > 0) {
            return redirect()->route('penyakit.index')->with('error', 'Gagal menghapus data penyakit karena masih terhubung dengan relasi');
        }

        if ($penyakits->delete()) {
            return redirect()->route('penyakit.index')->with('success', 'Data penyakit berhasil dihapus');
        } else {
            return redirect()->route('penyakit.index')->with('error', 'Gagal menghapus data penyakit');
        }
    }
}
