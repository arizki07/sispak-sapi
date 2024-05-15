<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penyakit = PenyakitModel::all();
        $gejala = GejalaModel::all();
        $relasi = RelasiModel::all();
        return view('pages.admin.data_relasi.index', [
            'active' => 'Relasi',
            'judul' => 'Data Relasi',
            'penyakit' => $penyakit,
            'gejala' => $gejala,
            'relasi' => $relasi,
        ]);
    }

    public function storeRelasi(Request $request)
    {
        $request->validate([
            'id_gejala' => 'required',
            'id_penyakit' => 'required',
            'mb' => 'required',
            'md' => 'required',
            'cf' => 'required',
        ]);

        $idGejala = $request->input('id_gejala');
        $idPenyakit = $request->input('id_penyakit');

        $existingRelasi = RelasiModel::where('id_gejala', $idGejala)
            ->where('id_penyakit', $idPenyakit)
            ->first();
        if ($existingRelasi) {
            return redirect()->back()->with('error', 'ID gejala dan ID penyakit sudah ada dalam relasi yang sama.');
        }

        $relasi = new RelasiModel();

        $relasi->id_gejala = $idGejala;
        $relasi->id_penyakit = $idPenyakit;
        $relasi->mb = $request->input('mb');
        $relasi->md = $request->input('md');
        $relasi->cf = $request->input('cf');

        $result = $relasi->save();

        if ($result) {
            return redirect()->route('relasi.index')->with('success', 'Data relasi berhasil ditambahkan.');
        } else {
            return redirect()->route('relasi.index')->with('error', 'Gagal menambahkan data. Silahkan Coba Lagi!');
        }
    }

    public function updateRelasi(Request $request, $id)
    {
        $request->validate([
            'id_gejala' => 'required',
            'id_penyakit' => 'required',
            'mb' => 'required',
            'md' => 'required',
            'cf' => 'required',
        ]);

        $idGejala = $request->input('id_gejala');
        $idPenyakit = $request->input('id_penyakit');

        // Periksa apakah relasi dengan id yang diberikan ada di database, jika tidak kembalikan kesalahan
        $existingRelasi = RelasiModel::find($id);
        if (!$existingRelasi) {
            return redirect()->back()->with('error', 'Relasi tidak ditemukan.');
        }

        // Lakukan validasi unik untuk mencegah duplikasi relasi
        $duplicateRelasi = RelasiModel::where('id_gejala', $idGejala)
            ->where('id_penyakit', $idPenyakit)
            ->where('id_relasi', '!=', $id) // Hindari membandingkan relasi dengan dirinya sendiri
            ->first();
        if ($duplicateRelasi) {
            return redirect()->back()->with('error', 'ID gejala dan ID penyakit sudah ada dalam relasi yang sama.');
        }

        // Lakukan pembaruan pada atribut relasi
        $existingRelasi->id_gejala = $idGejala;
        $existingRelasi->id_penyakit = $idPenyakit;
        $existingRelasi->mb = $request->input('mb');
        $existingRelasi->md = $request->input('md');
        $existingRelasi->cf = $request->input('cf');

        $result = $existingRelasi->save();

        if ($result) {
            return redirect()->route('relasi.index')->with('success', 'Data relasi berhasil diperbarui.');
        } else {
            return redirect()->route('relasi.index')->with('error', 'Gagal memperbarui data. Silakan coba lagi.');
        }
    }

    public function destroyR($id)
    {
        $relasi = RelasiModel::find($id);

        if (!$relasi) {
            return redirect()->route('relasi.index')->with('error', 'Data relasi tidak ditemukan');
        }

        if ($relasi->delete()) {
            return redirect()->route('relasi.index')->with('success', 'Data relasi berhasil dihapus');
        } else {
            return redirect()->route('relasi.index')->with('error', 'Gagal menghapus data relasi');
        }
    }
}
